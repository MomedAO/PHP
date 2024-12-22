CREATE DATABASE product COLLATE = 'UTF8_GENERAL_CI';
USE product;

CREATE TABLE product (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	product_name VARCHAR(20) NOT NULL,
    product_category TEXT,
	product_price int(4)
);