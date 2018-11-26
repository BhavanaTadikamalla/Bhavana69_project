                                                                       SCHEMAS

RETAILERS SCHEMA:

retailer(Tablename)

email	firstname	   lastname	     pwd      panno      address	shop_name

BUYERS SCHEMA

customer(tablename)

email	firstname	    lastname    pwd      panno      address	phnno

ORDERS SCHEMA

order(tablename)

seller_email	customer_email	quantity

retailer_wallet(table)
seller_email	amount

customer_wallet	(table)

customer_email	amount

fruit_stores(table)

seller_email	fruit_name	quantity	price




		Queries

1.Write SQL to get the number of retailers available in the system.

query: Select COUNT(email) from retailer;

2.Write SQL to get the shoppers counts for each retailer (who purchased).

query: Select COUNT(email) from orders where seller_email = '$-SESSION['email'];

3.Write SQL to get all the shoppers count.

query: Select COUNT(email) from customer;

4.Write SQL to get purchase amount per daywrt to a retailer.
 query: Select count(email)*100 from orders where email='$_SESSION['email'] AND DATE('timestamp')=CURDATE();
 
5.Write SQL to find top retailer based on the number of purchases
query: select seller_email from orders where max(select count(seller_email)from orders);
