CREATE TABLE menu
(	item_id VARCHAR(5) PRIMARY KEY,
	item_name VARCHAR(20),
	veg_non VARCHAR(10),
	price numeric(5),
	cuisine VARCHAR(10),
	category VARCHAR(10)
);


CREATE TABLE ingredients
(	i_id VARCHAR(5),
	i_name VARCHAR(15),
	item_id VARCHAR(10),
	PRIMARY KEY (i_id, item_id),
	FOREIGN KEY (item_id) REFERENCES menu (item_id)
);



CREATE TABLE toppings
(	t_id VARCHAR(5) PRIMARY KEY,
	t_name VARCHAR(20),
	t_category VARCHAR(10),
	price numeric (5)
);


CREATE TABLE chef 
(	chef_id INT(5) PRIMARY KEY AUTO_INCREMENT,
	chef_name VARCHAR(50),
	chef_email VARCHAR(50),
	chef_pno numeric(12),
	popularity numeric(4) 
	check( popularity>=0 and popularity <10)
);

CREATE TABLE prep_by
(	item_id VARCHAR(5),
	chef_id INT(5),
	PRIMARY KEY (item_id, chef_id),
	FOREIGN KEY (item_id) REFERENCES menu (item_id),
	FOREIGN KEY (chef_id) REFERENCES chef(chef_id)
);

		
CREATE TABLE restaurant
(	res_id VARCHAR(5) PRIMARY KEY,
	rest_name VARCHAR(50),
	rest_pno NUMERIC(12),
	rest_email VARCHAR(50)
);


CREATE TABLE rest_add
(	res_id VARCHAR(5) PRIMARY KEY,
	street_no  NUMERIC(5),
	locality VARCHAR(50),
	area VARCHAR (30),
	pincode NUMERIC(6),
	FOREIGN key (res_id) REFERENCES restaurant(res_id)
);


CREATE TABLE menu_made_in
(	item_id VARCHAR(5),
	res_id VARCHAR(5),
	PRIMARY KEY (item_id, res_id),
	FOREIGN KEY(item_id) REFERENCES menu(item_id),
	FOREIGN KEY (res_id) REFERENCES restaurant(res_id)
);

CREATE TABLE customers
(	cust_id INT(5) PRIMARY KEY AUTO_INCREMENT ,
	cust_name VARCHAR(50),
	cust_pass varchar(10) NOT NULL,
	cust_email VARCHAR(50),
	cust_pho numeric(12)
);



CREATE TABLE cust_add
(	cust_add_no int(5) AUTO_INCREMENT,
	cust_id INT(5),
	street_no  NUMERIC(5),
	locality VARCHAR(50),
	area VARCHAR (30),
	pincode NUMERIC(6), 
	PRIMARY KEY (cust_add_no,cust_id),
	FOREIGN KEY(cust_id) REFERENCES customers (cust_id)
	ON DELETE CASCADE
);


CREATE TABLE del_staff
(	del_id VARCHAR(5) PRIMARY KEY,
	del_name VARCHAR(50),
	del_age numeric (2) ,
	check(del_age>18 and del_age <65),
	del_phone numeric(12)
);

CREATE TABLE rates
(	cust_id int(5),
	item_id varchar(5),
	rate NUMERIC(2) ,
	check (rate>0 and rate <11),
	PRIMARY KEY (item_id,cust_id),
	FOREIGN KEY (item_id) REFERENCES menu(item_id),
	FOREIGN KEY (cust_id) REFERENCES customers (cust_id)
	ON DELETE CASCADE

);

CREATE TABLE offer
(	offer_id VARCHAR(5),
	discount NUMERIC(3),
	date_off date,
	PRIMARY KEY (offer_id) 

);

CREATE TABLE off_rest
(
	offer_id VARCHAR(5),
	res_id VARCHAR(5),
	PRIMARY KEY(offer_id,res_id),
	FOREIGN KEY(offer_id) REFERENCES offer(offer_id) 
	ON DELETE CASCADE,
	FOREIGN KEY(res_id) REFERENCES restaurant(res_id)
	ON DELETE CASCADE 
);



CREATE TABLE order_del
(	
	cust_id INT(5), 
	order_id INT(5) PRIMARY KEY AUTO_INCREMENT,
	del_id VARCHAR(5),
	offer_id VARCHAR(5),
	or_date date,
	mode_of_pay VARCHAR(10),
	FOREIGN KEY(cust_id) REFERENCES customers (cust_id) ,
	FOREIGN KEY(del_id) REFERENCES del_staff (del_id) ON DELETE SET NULL,
	FOREIGN KEY(offer_id) REFERENCES offer (offer_id) ON DELETE SET NULL
);


CREATE TABLE item_ordered
(	order_id INT(5),
	item_id VARCHAR(5),
	PRIMARY KEY(order_id, item_id),
	FOREIGN KEY(order_id) REFERENCES order_del (order_id),
	FOREIGN KEY (item_id) REFERENCES menu(item_id)
);


CREATE TABLE top_orders
(	order_id INT(5),
	top_id VARCHAR(5),
	PRIMARY KEY (order_id, top_id),
	FOREIGN KEY (order_id) REFERENCES order_del (order_id),
	FOREIGN KEY (top_id) REFERENCES toppings (t_id)
);


CREATE TABLE del_worksin_rest
(	del_id VARCHAR(5),
	res_id VARCHAR(5),
	PRIMARY KEY (del_id,res_id),
	FOREIGN KEY (del_id) REFERENCES del_staff (del_id) ON DELETE cascade,
	FOREIGN KEY (res_id) REFERENCES restaurant (res_id)
);	 

