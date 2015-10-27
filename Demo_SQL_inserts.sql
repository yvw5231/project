INSERT INTO User (Email_address, Phone_num, Username, Password) VALUES 
('adam@psu.edu', '1223341234', 'manyapples', 'password'),
('berty@yahoo.com', '4123379148', 'peopletopeople', 'drowssap'),
('lolking@me.com', '1234567896', 'notme', 'helloworld'),
('newemail@him.com', '2589631234', 'anotheruser', '12345'),
('asians@sublime.com', '4127898523', 'chinesebaloni', 'musicvideo'),
('kpop@korea.kk', '1231231231', 'skyskyskys', 'couldiiiiii'),
('morefakedata@fakers.org', '1234659635', 'raprapitout', 'lolzallday'),
('taeyeon@gg.gg', '1231221994', 'flyitout', 'mylife'),
('almostthere@hi.com', '2015100989', 'verbaljint', 'musicvideo'),
('eleven@gmail.com', '1800180010', 'apples', 'moreapples'),
('ineedsomething@hotmail.com', '1800phoneme', 'girlsrule', 'kisses'),
('koreans@laugh.me', '1800buynow', 'league', 'legends'),
('helloworld@gmail.com', '1234567890', 'string', 'band'),
('close@aol.com', '1800heartattack', 'rugbychamps', 'password'),
('lastone@gmail.com,', '9876543210', 'footballfordayz', 'pickmeup');

INSERT INTO Buyer (Id, DOB, Income) VALUES
(1, 2000-12-12, 100),
(2, 1991-01-23, 90000),
(3, 1940-03-11, 145000);

INSERT INTO Zip (Zip_id, State, City) VALUES
('15239', 'PA', 'Pittsburgh'),
('16802', 'PA', 'State College'),
('52596', 'CA', 'Fratville');

INSERT INTO Address (Street, Apt_num, Zip, Permanent_addr) VALUES
('4444 Homer Ave', 34, '16802', 0),
('1 Hoverville St', 0, '16802', 1),
('Lalaland Ct', 100, '15239', 1);

INSERT INTO Supplier (Id, Company_name, Company_category, Revenue, Routing_num, Address) VALUES
(4, 'Hello Kitty', 'league', 1000000000, 123456, 1),
(5, 'Lol World', 'league', 16546520, 58962, 2),
(6, 'King Lol', 'league', 845616132, 486525, 2);


INSERT INTO Rating_user (Comment, Star_rank, Item_id) VALUES
("This product sucked!", 0, 1),
("This product was the best!", 5, 2),
("Can't believe I bought this...", 1, 1),
("Wow can't wait to see more products like this", 4, 3),
("It was okay. Not very impressive", 3, 4);

INSERT INTO Category (Category_name, Super_category) VALUES
("root", ),
("in-game items", 1),
("virtual", 2),
("physical", 2),



INSERT INTO Item (Item_name, Category_id, Supplier_id, Price, Description, Quantity, Combine_id1, Combine_id2, Combine_id3) VALUES
("League Item0", 25, 1, 517, "A very good League Item number 0", 9, 9, 48, 34),
("League Item1", 10, 2, 673, "A very good League Item number 1", 2, 3, 18, 28),
("League Item2", 29, 3, 679, "A very good League Item number 2", 16, 41, 4, 26),
("League Item3", 10, 1, 796, "A very good League Item number 3", 16, 31, 16, 40),
("League Item4", 10, 1, 549, "A very good League Item number 4", 8, 42, 9, 14),
("League Item5", 27, 1, 607, "A very good League Item number 5", 14, 35, 3, 2),
("League Item6", 4, 3, 239, "A very good League Item number 6", 10, 13, 19, 29),
("League Item7", 29, 1, 294, "A very good League Item number 7", 16, 48, 7, 28),
("League Item8", 26, 3, 351, "A very good League Item number 8", 1, 25, 14, 7),
("League Item9", 15, 2, 637, "A very good League Item number 9", 9, 47, 23, 4),
("League Item10", 30, 3, 742, "A very good League Item number 10", 20, 32, 11, 23),
("League Item11", 16, 2, 919, "A very good League Item number 11", 15, 16, 27, 50),
("League Item12", 17, 1, 507, "A very good League Item number 12", 18, 20, 14, 8),
("League Item13", 13, 3, 651, "A very good League Item number 13", 1, 16, 46, 19),
("League Item14", 27, 2, 827, "A very good League Item number 14", 18, 35, 29, 33),
("League Item15", 26, 2, 788, "A very good League Item number 15", 0, 1, 49, 3),
("League Item16", 16, 1, 609, "A very good League Item number 16", 11, 36, 44, 19),
("League Item17", 16, 2, 412, "A very good League Item number 17", 13, 13, 7, 10),
("League Item18", 16, 1, 728, "A very good League Item number 18", 8, 30, 3, 16),
("League Item19", 25, 2, 381, "A very good League Item number 19", 15, 46, 31, 33),
("League Item20", 5, 1, 207, "A very good League Item number 20", 4, 23, 35, 26),
("League Item21", 13, 3, 642, "A very good League Item number 21", 11, 30, 46, 24),
("League Item22", 19, 3, 972, "A very good League Item number 22", 3, 50, 12, 44),
("League Item23", 4, 3, 805, "A very good League Item number 23", 19, 50, 50, 50),
("League Item24", 9, 1, 719, "A very good League Item number 24", 14, 39, 3, 4),
("League Item25", 8, 3, 361, "A very good League Item number 25", 6, 25, 14, 33),
("League Item26", 5, 2, 129, "A very good League Item number 26", 13, 22, 33, 26),
("League Item27", 20, 3, 907, "A very good League Item number 27", 10, 26, 46, 2),
("League Item28", 4, 3, 347, "A very good League Item number 28", 7, 30, 9, 42),
("League Item29", 24, 1, 26, "A very good League Item number 29", 1, 33, 20, 30),
("League Item30", 5, 3, 255, "A very good League Item number 30", 18, 47, 34, 9),
("League Item31", 24, 1, 143, "A very good League Item number 31", 9, 19, 49, 15),
("League Item32", 19, 2, 652, "A very good League Item number 32", 13, 11, 41, 22),
("League Item33", 9, 2, 889, "A very good League Item number 33", 13, 39, 9, 39),
("League Item34", 7, 3, 218, "A very good League Item number 34", 6, 50, 48, 43),
("League Item35", 30, 2, 378, "A very good League Item number 35", 4, 23, 49, 29),
("League Item36", 12, 2, 285, "A very good League Item number 36", 6, 40, 33, 19),
("League Item37", 26, 2, 505, "A very good League Item number 37", 6, 32, 35, 39),
("League Item38", 9, 3, 629, "A very good League Item number 38", 20, 48, 35, 41),
("League Item39", 12, 1, 637, "A very good League Item number 39", 7, 25, 37, 10),
("League Item40", 26, 3, 917, "A very good League Item number 40", 20, 7, 36, 9),
("League Item41", 15, 1, 431, "A very good League Item number 41", 9, 32, 30, 17),
("League Item42", 13, 1, 99, "A very good League Item number 42", 0, 24, 3, 33),
("League Item43", 6, 2, 649, "A very good League Item number 43", 20, 1, 48, 49),
("League Item44", 20, 2, 475, "A very good League Item number 44", 4, 39, 40, 10),
("League Item45", 19, 2, 335, "A very good League Item number 45", 11, 30, 23, 23),
("League Item46", 14, 1, 701, "A very good League Item number 46", 19, 21, 10, 23),
("League Item47", 27, 1, 251, "A very good League Item number 47", 12, 38, 40, 49),
("League Item48", 1, 3, 983, "A very good League Item number 48", 10, 36, 38, 34),
("League Item49", 21, 1, 728, "A very good League Item number 49", 1, 40, 33, 40);