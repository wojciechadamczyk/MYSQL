<?php

//CREATE TABLE products_orders(
//id int AUTO_INCREMENT,
//item_id int NOT NULL,
//order_id int NOT NULL,
//PRIMARY KEY(id),
//FOREIGN KEY(order_id) REFERENCES orders(order_id),
//FOREIGN KEY(item_id) REFERENCES items(item_id)
//);

//CREATE TABLE product_order(
//product_id int NOT NULL,
//order_id int NOT NULL,
//FOREIGN KEY(product_id) REFERENCES Product(id), 
//FOREIGN KEY(order_id) REFERENCES `Order`(id)
//);


//SELECT * FROM `Order`
//JOIN `product_order` ON `Order`.id = `product_order`.Order_id