CREATE TABLE Ordercar(
	user_id int NOT NULL AUTO_INCREMENT,
	order_time CHAR(50),
	order_price CHAR(10),
	username CHAR(50)
);

CREATE TABLE OrderInformation(
	order_id int NOT NULL AUTO_INCREMENT,
	ware_id int,
	order_num int,
	user_name CHAR(50),
	ware_name CHAR(50)
);