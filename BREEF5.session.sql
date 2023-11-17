DROP DATABASE electronacer;
-- @block
CREATE DATABASE electronacer;
-- @block
USE electronacer;

CREATE TABLE users (
    userId int PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255)

);
INSERT INTO users (username,password) VALUES ("fadi","nadi");
-- @block
create table category (
 id int,
 cat_name varchar(55)
 );


 INSERT INTO category
VALUES 
    (1,'storage'),
    (2,'arduino'),
    (3,'Motherboard');

-- @block
create table product (
 label varchar(100),
 img varchar(255),
 price decimal(10,2),
 min_quantity int,
 stock_quantity int
 );

  insert into product (label , img , price , min_quantity , stock_quantity)
values ('Toshiba - Portable Hard Drives 2TB','imges/storg1.png',260,5,60),
		('22TB Ultrastar SATA Data Center Hard Drive','imges/storg2.png',650,4,30),
        ('Ultrastar® DC HC520 | Western Digital','imges/storg3.png',600,4,40),
        ('Z690 Gaming Motherboardl','imges/mother1.png',3500,2,15),
        ('B550 AORUS PRO AC','imges/mother2.png',4000,2,12),
        ('Gigabyte B550 Aorus Elite V2','imges/mother3.png',5050,2,12),
        ('arduino uno sensor Shield','imges/ardo.png',450,6,20),
        ('Arduino Uno R3 + Câble USB','imges/ardo1.png',500,5,18),
        ('Arduino mod 3 + Câble USB','imges/ardo2.png',450,6,22)



