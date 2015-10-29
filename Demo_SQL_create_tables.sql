CREATE TABLE User(
	Id int NOT NULL AUTO_INCREMENT,
	Email_address CHAR(50),
	Phone_num CHAR(10),
	Username CHAR(50),
	Password CHAR(50),
	PRIMARY KEY (Id)
);

CREATE TABLE Buyer(
	Buyer_id int NOT NULL AUTO_INCREMENT,
	Id int,
	DOB DATE,
	Income int,
	PRIMARY KEY (Buyer_id),
	FOREIGN KEY (Id) REFERENCES User (Id)
);

CREATE TABLE Zip(
	Zip_id CHAR(5),
	State CHAR(20),
	City CHAR(30),
	PRIMARY KEY (Zip_id)
);

CREATE TABLE Address(
	Id int NOT NULL AUTO_INCREMENT,
	Street CHAR(50),
	Apt_num int,
	Zip CHAR(5),
	Permanent_addr BOOLEAN,
	PRIMARY KEY (Id),
	FOREIGN KEY (Zip) REFERENCES Zip (Zip_id)
);

CREATE TABLE Supplier(
	Supplier_id int NOT NULL AUTO_INCREMENT,
	Id int,
	Company_name CHAR(50),
	Company_category CHAR(50),
	Revenue int,
	Routing_num int,
	Address int,
	PRIMARY KEY (Supplier_id),
	FOREIGN KEY (Id) REFERENCES User (Id),
	FOREIGN KEY (Address) REFERENCES Address (Id)
);

CREATE TABLE Credit_Card(
	Card_num int NOT NULL,
	Name CHAR(50),
	Expir_date DATE,
	CVV CHAR(3),
	Card_brand CHAR(50),
	PRIMARY KEY (Card_num)
);

CREATE TABLE Category(
	Category_id int NOT NULL AUTO_INCREMENT,
	Category_name CHAR(50),
	Super_category int,
	PRIMARY KEY (Category_id),
	FOREIGN KEY (Super_category) REFERENCES Category (Category_id)
);

CREATE TABLE Bid_on(
	Bidon_id int NOT NULL AUTO_INCREMENT,
	Bid_start_time TIMESTAMP,
	Bid_end_time TIMESTAMP,
	Price int,
	PRIMARY KEY (Bidon_id)
);

CREATE TABLE Deliver_to(
	Deliver_id int NOT NULL AUTO_INCREMENT,
	Tracking_num int NOT NULL,
	Order_id int NOT NULL,
	PRIMARY KEY (Deliver_id)
);

CREATE TABLE Item(
	Item_id int NOT NULL AUTO_INCREMENT,
	Item_name CHAR(50),
	Category_id int,
	Supplier_id int,
	Price int,
	Description CHAR(140),
	Quantity int,
	Combine_id1 int,
	Combine_id2 int,
	Combine_id3 int,
	PRIMARY KEY(Item_id),
	FOREIGN KEY(Combine_id1) REFERENCES Item (Item_id),
	FOREIGN KEY(Combine_id2) REFERENCES Item (Item_id),
	FOREIGN KEY(Combine_id3) REFERENCES Item (Item_id),
	FOREIGN KEY (Supplier_id) REFERENCES Supplier (Supplier_id),
	FOREIGN KEY (Category_id) REFERENCES Category (Category_id)
);

CREATE TABLE Rating_user(
	Rating_id int NOT NULL AUTO_INCREMENT,
	Comment CHAR(140),
	Star_rank int,
	Item_id int,
	PRIMARY KEY (Rating_id),
	FOREIGN KEY (Item_id) REFERENCES Item (Item_id)
);

CREATE TABLE Rating_Supplier(
	Rating_id int NOT NULL AUTO_INCREMENT,
	Comment CHAR(140),
	Star_rank int,
	User_id int,
	Item_id int,
	PRIMARY KEY (Rating_id),
	FOREIGN KEY (User_id) REFERENCES User(Id),
	FOREIGN KEY (Item_id) REFERENCES Item (Item_id)
);

CREATE TABLE Property(
	Item_id int,
	Quantity int,
	Date_purchased DATE,
	PRIMARY KEY (Item_id),
	FOREIGN KEY (Item_id) REFERENCES Item (Item_id)
);

CREATE TABLE History(
	Bid int NOT NULL AUTO_INCREMENT,
	Item_id int,
	Buyer_id int,
	Bidding_price int,
	Bid_on int,
	Time_stamp TIMESTAMP,
	PRIMARY KEY (Bid),
	FOREIGN KEY (Item_id) REFERENCES Item (Item_id),
	FOREIGN KEY (Bid_on) REFERENCES Bid_on (Bidon_id),
	FOREIGN KEY (Buyer_id) REFERENCES Buyer (Buyer_id)
);

CREATE TABLE Analysis(
	Analysis_id int NOT NULL AUTO_INCREMENT,
	Item_id int,
	Quantity_sold int,
	Total_revenue int,
	PRIMARY KEY(Analysis_id),
	FOREIGN KEY(Item_id) REFERENCES Item(Item_id)
); 

CREATE TABLE Item_type(
	Category_id int,
	Item_type CHAR(30),
	PRIMARY KEY(Category_id),
	FOREIGN KEY(Category_id) REFERENCES Item (Category_id)
);

