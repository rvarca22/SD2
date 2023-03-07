#Team 7, SQL Tables, 10/12/2021, Book Buyer, Marcus Vescio, Ryan Varca, JohnLuke Thermos
CREATE DATABASE IF NOT EXISTS site_db;
USE site_db;
DROP TABLE IF EXISTS team7_users;
DROP TABLE IF EXISTS team7_products;
DROP TABLE IF EXISTS team7_suppliers;

CREATE TABLE IF NOT EXISTS team7_users (login_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
					record_active ENUM('Y', 'N') DEFAULT 'Y' NOT NULL,
					update_active DATE NOT NULL,
					updated_by TEXT NOT NULL,
					username VarChar(10) NOT NULL UNIQUE,
					password VarChar(20) NOT NULL,
					password_created DATE NOT NULL,
					first_name VarChar(256) NOT NULL,
					level ENUM('Admin', 'Employee') NOT NULL,
					email VarChar(256) UNIQUE,
					home_address VarChar(256) NOT NULL,
					hashed_password Char(100) NOT NULL DEFAULT 'NONE');

CREATE TABLE IF NOT EXISTS team7_products (product_id INT AUTO_INCREMENT PRIMARY KEY,
					record_active ENUM('Y', 'N') DEFAULT 'Y' NOT NULL,
					title VarChar(100),
					publication_date DATE NOT NULL,
					price DECIMAL(5,2) NOT NULL,
					author VarChar(100) NOT NULL,
					stock_quant INT NOT NULL, 
					pages INT NOT NULL,
					serial_num FLOAT NOT NULL, 
					supplier VarChar(100) NOT NULL);

CREATE TABLE IF NOT EXISTS team7_suppliers (supplier_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
					record_active ENUM('Y', 'N') DEFAULT 'Y' NOT NULL,
					supplier_name TEXT NOT NULL,
					address VarChar(100) NOT NULL,
					city VarChar(100) NOT NULL,
					phone_num FLOAT NOT NULL);


INSERT INTO team7_users VALUES(1, 'Y', CURDATE(), 'Marcus', 'RyanV', 'ryanv1', CURDATE(), 'Ryan', 'Admin', 'Ryan.Varca1@marist.edu', "3399 North Rd, Poughkeepsie, NY 12601", "None");
INSERT INTO team7_users VALUES(2, 'Y', CURDATE(), 'Marcus', 'JohnLukeT', 'johnluket1', CURDATE(), 'JohnLuke', 'Admin', 'JohnLuke.Thermos1@marist.edu', "3399 North Rd, Poughkeepsie, NY 12601", "None");
INSERT INTO team7_users VALUES(3, 'Y', CURDATE(), 'Marcus', 'MarcusV', 'marcusv1', CURDATE(), 'Marcus', 'Admin', 'Marcus.Vescio1@marist.edu', "3399 North Rd, Poughkeepsie, NY 12601", "None");
INSERT INTO team7_users VALUES(4, 'Y', CURDATE(), 'Marcus', 'Tokash221', 'ProfAPT0', CURDATE(), 'Andrew', 'Admin', '', "3399 North Rd, Poughkeepsie, NY 12601", "None");

INSERT INTO team7_products VALUES(1, 'Y', "To Kill a Mockingbird", "1960-06-11", 8.99, "Harper Lee", 30, 281, 9780446310505, "Amazon");
INSERT INTO team7_products VALUES(2, 'Y', "Catcher in the Rye", "1951-06-16", 9.99, "J. D. Salinger", 20, 277, 9783462015393, "Amazon");
INSERT INTO team7_products VALUES(3, 'Y', "Hamlet", "1775-04-04", 9.99, "William Shakespeare", 50, 140, 9780866986663, "Amazon");

INSERT INTO team7_suppliers VALUES(1, 'Y',  "Amazon", "All Locations", "All Locations", 8773759365);
INSERT INTO team7_suppliers VALUES(2, 'Y', "Barnes & Noble", "All Locations", "All Locations", 8454852224);
INSERT INTO team7_suppliers VALUES(3, 'Y', "Joe the Book Guy", "3399 North Rd", "Poughkeepsie", 123567459);

SELECT * FROM team7_users;
SELECT * FROM team7_products;
SELECT * FROM team7_suppliers;

Explain team7_users;
Explain team7_products;
Explain team7_suppliers;