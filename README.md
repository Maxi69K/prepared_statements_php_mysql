# prepared_statements_php_mysql

## Create database
CREATE DATABASE testdb;

## Create table
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  age INT(2) NOT NULL
);

## filling in the table
INSERT INTO users VALUES
(NULL, 'Dejan', 22),
(NULL, 'Sofija', 17); 

