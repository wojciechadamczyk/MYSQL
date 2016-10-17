<?php

//SELECT * FROM customers JOIN addresses ON customers.customer_id = addresses.customer_id
//SELECT customers.*, addresses.customer_id AS cust_id_z_addr, addresses.street FROM customers JOIN addresses ON customers. customer_id = addresses.customer_id

//CREATE TABLE users(
//id int NOT NULL AUTO_INCREMENT,
//name varchar(255) NOT NULL,
//PRIMARY KEY(id)
//)
//
//CREATE TABLE UserAddress (
//user_id int NOT NULL,
//city varchar(255),
//    street varchar(255),
//    house_nr varchar(255),
//PRIMARY KEY(user_id),
//FOREIGN KEY(user_id) REFERENCES users(id)
//ON DELETE CASCADE
//);