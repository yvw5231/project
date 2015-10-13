CREATE TABlE User(
	Id int NOT NULL AUTO_INCREMENT,
	Email_address CHAR(50),
	Phone_num int,
	Username CHAR(50),
	Password CHAR(50),
	PRIMARY KEY (Id)
);

CREATE TABlE Buyer(
	Buyer_id int NOT NULL AUTO_INCREMENT,
	Id int,
	DOB DATE，
	Income int,
	PRIMARY KEY (Buyer_id),
	FOREIGN KEY (Id) REFERENCE User (Id)
);

CREATE TABlE Supplier(
	Supplier_id int NOT NULL AUTO_INCREMENT,
	Id int,
	Company_name CHAR(50),
	Company_category CHAR(50),
	Revenue int,
	Routing_num int,
	Address int,
	PRIMARY KEY (Supplier_id),
	FOREIGN KEY (Id) REFERENCE User (Id),
	FOREIGN KEY (Address) REFERENCE Zip (Zip_id)
);

CREATE TABlE Credit_Card(
	Card_num int NOT NULL,
	Name CHAR(50),
	Expir_date DATE,
	CVV int,
	PRIMARY KEY (Card_num)
);

CREATE TABlE Card_brand(
	Card_num int NOT NULL,
	Card_brand CHAR(50),
	PRIMARY KEY (Card_num);
);

CREATE TABlE Address(
	Id int NOT NULL AUTO_INCREMENT,
	Street CHAR(50),
	Apt_num int,
	Zip int,
	Permanet_addr BOOLEAN,
	PRIMARY KEY (Id),
	FOREIGN KEY (Zip) REFERENCE Zip (Zip_id)
);

CREATE TABlE Zip(
	Zip_id int NOT NULL AUTO_INCREMENT,
	State CHAR(20),
	City CHAR(30),
	PRIMARY KEY (Zip_id)
);

CREATE TABlE Rating_user(
	Rating_id int NOT NULL AUTO_INCREMENT,
	Comment CHAR(140),
	Star_rank int,
	Supplier_id int,
	Item_id int,
	PRIMARY KEY (Rating_id),
	FOREIGN KEY (Supplier_id) REFERENCE Supplier(Supplier_id),
	FOREIGN KEY (Item_id) REFERENCE Item (Item_id)
);


CREATE TABlE Rating_Supplier(
	Rating_id int NOT NULL AUTO_INCREMENT,
	Comment CHAR(140),
	Star_rank int,
	User_id int,
	Item_id int,
	PRIMARY KEY (Rating_id),
	FOREIGN KEY (User_id) REFERENCE User(Id),
	FOREIGN KEY (Item_id) REFERENCE Item (Item_id)
);

CREATE TABlE Item(
	Item_id int NOT NULL AUTO_INCREMENT,
	Item_name CHAR(50),
	Category_id int,
	Supplier_id int,
	Price int,
	Description CHAR(140),
	Item_type CHAR(30),
	Quantity int,
	Combine_id int,
	PRIMARY KEY(Item_id),
	FOREIGN KEY (Supplier_id) REFERENCE Supplier (Supplier_id),
	FOREIGN KEY (Combine_id) REFERENCE Combine (Combine_id),
	FOREIGN key (Category_id) REFERENCE Category (Category_id)
);


CREATE TABlE Property(
	Item_id int,
	Quantity int,
	Date_purchased DATE，
	FOREIGN KEY (Item_id) REFERENCE Item (Item_id)
);

CREATE TABlE History(
	Bid int NOT NULL AUTO_INCREMENT,
	Item_id int,
	Buyer_id int,
	Bidding_price int,
	Time_stamp TIMESTAMP,
	PRIMARY KEY (Bid),
	FOREIGN KEY (Item_id) REFERENCE Item (Item_id),
	FOREIGN KEY (Buyer_id) REFERENCE Buyer (Buyer_id)
);

CREATE TABlE Combine(
	Combine_id int NOT NULL AUTO_INCREMENT,
	Combine_id1 int,
	Combine_id2 int,
	Combine_id3 int,
	Price int,
	PRIMARY KEY(Combine_id),
	FOREIGN KEY(Combine_id1) REFERENCE Combine (Combine_id),
	FOREIGN KEY(Combine_id2) REFERENCE Combine (Combine_id),
	FOREIGN KEY(Combine_id3) REFERENCE Combine (Combine_id)
);
CREATE TABlE Analysis(
	Analysis_id int NOT NULL AUTO_INCREMENT,
	Item_id int,
	Quantity_sold int,
	Total_revenue int,
	PRIMARY KEY(Analysis_id),
	FOREIGN KEY(Item_id) REFERENCE Item(Item_id)
); 

CREATE TABlE Category(
	Category_id int NOT NULL AUTO_INCREMENT,
	Category_name CHAR(50),
	Super_category int,
	PRIMARY KEY (Category_id),
	FOREIGN KEY (Super_category) REFERENCE Category (Category_id)
);



CREATE TABlE Bid_on(
	Bid_start_time TIMESTAMP,
	Bid_end_time TIMESTAMP,
	Price int
);

CREATE TABlE Deliver_to(
	Tracking_num int NOT NULL,
	Order_id int NOT NULL
);























