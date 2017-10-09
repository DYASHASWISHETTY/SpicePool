--querries

--simple querries
--1)'selecting all the food menu that are cuisine = 'Italian' along with thier prices'
SELECT item_name,price from menu where cuisine = 'Italian';

--2)'Find a food menu which does not contain "peanuts"and which is "veg" '
SELECT item_name , price FROM menu m , ingredients ing WHERE i_name <> 'Nachos' and m.item_id = ing.i_name;  -- search of ilike syntax

--3)'Show all the toppings and thier prices provided for "choco mouuse"'
SELECT top.t_name, top.price FROM toppings top, menu i where i.item_name =  'Choco Mousse' and i.category = top.t_category ;

--4)'Show all the food menu prepared by "abc chef" from restaurenet "abc" whose price in below 200'
SELECT i.item_name , i.price FROM menu i, chef c ,prep_by p where i.item_id = p.item_id and p.chef_id = c.chef_id and c.chef_name  = 'Harshita Birdu' and i.price<200;


--5) 'give a count of how many veg-non veg food is present'
SELECT i.category as CATEGORY, COUNT(i.category) as no_of_menu FROM menu i GROUP BY category;

--'choose food according to the cusine'
SELECT *FROM menu WHERE cuisine = 'Indian';

--6) 'SELECT those customers whose area is same as the restaurant area'

SELECT c.cust_name , ca.area FROM customers c 
	INNER JOIN cust_add ca ON c.cust_id = ca.cust_id 
	INNER JOIN rest_add ra ON ra.area = ca.area
	INNER JOIN restaurant r ON r.res_id = ra.res_id ;
	
	
---select all restuarant near a customer
SELECT r.res_name, r.rest_pno, r.rest_pno FROM restaurant r 
	INNER JOIN rest_add ra ON r.res_id = ra.res_id
	INNER JOIN cust_add ca ON ra.area = ca.area
	INNER JOIN customers c ON c.cust_id = ca.cust_id  ;

	 
--7) 'Customer history to show to the custumer'


SELECT od.order_id, sum(m.price) FROM menu m, order_del od WHERE m.item_id in (SELECT it.item_id FROM item_ordered it, customers c where it.order_id = od.order_id and od.cust_id = c.cust_id and c.cust_name ='Chinmayee Shenvi') group by od.order_id;


--8) 'show all the food iteams by prepared by a chef "shenvi" and "bhoomika" according to the incre order of thier price '

SELECT m.item_name,m.price from menu m WHERE item_id in ((SELECT p.item_id FROM prep_by p, chef c where c.chef_id = p.chef_id and c.chef_name =' Harshita Birdu') 
	UNION (SELECT p.item_id FROM prep_by p, chef c where c.chef_id = p.chef_id and c.chef_name ='Chetna Sureka')) order BY m.price;
	
--9) Giving the details of the orders made in jan 2017 gives the order_id and rest_name. 
SELECT o.order_id , r.rest_name, o.or_date
FROM order_del o, restaurant r
WHERE (extract(month from o.or_date)=01) and (extract(year from o.or_date)=2017) and o.res_id = r.res_id;



--10)'To suggest those food items that the customer has previously ordered by that customer'
SELECT m.item_name ,m.price FROM menu m WHERE m.item_id  IN
 (SELECT m.item_id FROM order_del o, item_ordered it, customers c  WHERE c.cust_name='Chinmayee Shenvi' AND c.cust_id = o.cust_id and o.order_id = it.order_id );
 

--11) Increasing the price by 0.1 times where item id is given
UPDATE menu SET price =price*1.1 where item_id ='IN001';

--12)'to show all the food items, its price, which catagory it belongs and cuisine by a restaurant by giving the restaurent name'

CREATE VIEW res_menu
AS SELECT m.item_name,m.price, m.cuisine, m.category 
	FROM menu m, restaurant r ,menu_made_in fmi
	WHERE m.item_id = fmi.item_id AND fmi.res_id = r.res_id AND r.rest_name = 'Downtown Cafe';
	

--13)'Make a bill given cust_name' 'Bill should contain food_name ,food price, topping price ,toppping name , quantity, price of qunitity'
--givens the details of the item and toppingd ordered by the customer(customer name is provided )
SELECT i.item_name, i.price FROM menu i, item_ordered it, customers c, order_del o WHERE c.cust_name  = 'Chinmayee Shenvi' and c.cust_id = o.cust_id and o.order_id = it.order_id and it.item_id = i.item_id     
SELECT t.t_name, t.price FROM toppings t, top_orders top, customers c, order_del o WHERE c.cust_name ='Chinmayee Shenvi' and c.cust_id = o.cust_id and o.order_id = top.order_id AND top.top_id = t.t_id;

-- Bill when order_id is known
SELECT i.item_name, i.price FROM menu i, item_ordered it WHERE it.order_id = 30 and it.item_id = i.item_id ;
SELECT sum(i.price) Grand_Total FROM menu i, item_ordered it WHERE it.order_id = 30 and it.item_id = i.item_id ;

--14)'Show top 10 dishes of the res "abc" according no of times the food is ordered'

--SELECT m.item_id, m.item_name , m.price from menu m where m.item_id IN (SELECT it.item_id from item_ordered it, restaurant r, menu_made_in mmi WHERE r.res_id =mmi.res_id and mmi.item_id = it.item_id GROUP BY it.item_id ORDER BY count(m.item_id));


SELECT m.item_id, m.item_name , m.price from menu m where m.item_id IN (SELECT it.item_id from item_ordered it, restaurant r, menu_made_in mmi WHERE r.res_id =mmi.res_id and mmi.item_id = it.item_id GROUP BY it.item_id) limit 10;

--15)'SHOW the range of a restaurant . gives the average and maximum and minimum of food item of every restuarant sorts by avg price

SELECT r.rest_name,round (avg(m.price),2) as averge_price, min(m.price) minimum_price ,max(m.price) as maximum_price  from menu m, restaurant r, menu_made_in mmi where mmi.item_id = m.item_id and mmi.res_id = r.res_id  group by(r.res_id) order by(avg(m.price));
 
--16) Displays the discounts available for a particular month in particular restaurants present in koramangala

SELECT o.discount, o.date_off, rs.rest_name, rsadd.area from offer o, off_rest r, restaurant rs, rest_add rsadd where extract(month from date_off)<2 and extract(year from date_off)<=2017 and o.discount>15

INTERSECT

SELECT o.discount, o.date_off, rs.rest_name, rsadd.area from offer o, off_rest r, restaurant rs, rest_add rsadd where extract(month from date_off)<2 and extract(year from date_off)<=2017 and r.res_id = rs.res_id and rs.res_id = rsadd.res_id and rsadd.area='Koramangala';
	

--17)  updating the phone no by giving the customer number
UPDATE customers SET cust_pho = '7899427797' WHERE cust_name ='Chinmayee Shenvi'; 

--18)
-- deleting all the offers which are before feb 2017
DELETE FROM offer WHERE extract(month from date_off)<2 and extract(year from date_off)<=2017;

--19)
--removing the staff where staff id is given
DELETE FROM del_staff WHERE del_id = 'DP001' ;



---to create a row a row in reat_add when a new restaurant is added 

CREATE OR REPLACE FUNCTION rec_insert()  
  RETURNS trigger AS  
$$  
BEGIN  
         INSERT INTO rest_add(res_id,street_no,locality ,area,pincode)  
         VALUES(NEW.res_id,0000,'xxxx','xxxx',0000);  
   
    RETURN NEW;  
END;  
$$  
LANGUAGE 'plpgsql';  


CREATE TRIGGER ins_same_rec  
  AFTER INSERT  
  ON restaurant  
  FOR EACH ROW  
  EXECUTE PROCEDURE rec_insert();  
  
  INSERT INTO restaurant VALUES ('RS021','Cafe Coffee Day', 944931453,'ccf@gmail.com');
  
  DROP FUNCTION rec_insert();
  DROP TRIGGER ins_same_rec ON restaurant;
  
 
--- to eliminate all the spaces
CREATE OR REPLACE FUNCTION ele_sapce()  
  RETURNS trigger AS  
$$  
BEGIN  
NEW.cust_id = UPPER(NEW.cust_id);  
NEW.cust_name = LTRIM(NEW.cust_name);  
NEW.cust_email = LTRIM(NEW.cust_email);  
RETURN NEW;  
END;  
  
$$  
LANGUAGE 'plpgsql';

CREATE TRIGGER to_ele_spc  
  BEFORE INSERT  
  ON customers
  FOR EACH ROW  
  EXECUTE PROCEDURE ele_sapce();  
  


--- shows all the food items along with the chef names in the incresing order of the popularity og chef
CREATE VIEW item_chef
AS SELECT m.item_name, m.veg_non, m.price, m.cuisine, m.category , c.chef_name
FROM  menu m INNER JOIN prep_by p ON p.item_id = m.item_id
INNER JOIN chef c ON p.chef_id = c.chef_id order by (c.popularity);

SELECT * FROM item_chef;
 
--- shows the food item details along with all possible toppings for it , provides topping price also
CREATE VIEW item_top
AS SELECT m.item_name, m.veg_non, m.price, m.cuisine, m.category , t.t_name ,t.price as topp_price
FROM  menu m RIGHT OUTER JOIN toppings t ON t.t_category = m.category  ;
SELECT* FROM item_top;


--gives the chef name who prepared a food item which has 'Mushroom' 
SELECT c.chef_name FROM chef c , ingredients i, menu m , prep_by p 
WHERE p.item_id = m.item_id and  m.item_id = i.item_id and i.i_name = 'Mushroom'; 

--- gives offers to the customers based on history
SELECT o.offer_id , o.discount from off_rest ofr , offer o ,order_del od
	where od.cust_id = 'CN001' AND ofr.res_id  = od.res_id and ofr.offer_id = o.offer_id; 

---Show all the food items prepared by a particular restuarant
SELECT m.item_name , m.price FROM menu m
INNER JOIN  menu_made_in mmi ON mmi.item_id = m.item_id 
INNER JOIN restaurant r ON r.res_id = mmi.res_id WHERE r.rest_name ='Anna Kuteera' order by (m.price);



---For a given order_id show toppings available
SELECT t.t_name, t.t_category, t.price FROM toppings t , menu m, item_ordered io WHERE t.t_category = m.category IN(
SELECT m.category FROM menu m, item_ordered io WHERE io.order_id =1 AND io.item_id=m.item_id) GROUP BY (t.t_name, t.t_category) ORDER BY (t.price) LIMIT 10 ; 