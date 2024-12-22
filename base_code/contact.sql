CREATE DATABASE contact COLLATE = "utf8_general_ci";

USE contact;

CREATE TABLE contact (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	f_name VARCHAR(15) NOT NULL,
    l_name VARCHAR(15),
    dption TEXT,
    cel NUMERIC,
    email VARCHAR(30)
);
ALTER TABLE contact ADD COLUMN birthday DATE;