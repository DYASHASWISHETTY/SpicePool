<?php
		session_start();
		if($_SESSION['user']){  
		}
		else{
			header("location: welcome.php"); 
		}
		mysql_connect("localhost", "root","yashu") or die(mysql_error());
		mysql_select_db("spicepool") or die("Cannot connect to database");
		$user = $_SESSION['user'];
		$cust_id = $_SESSION['cust_id'];
		
		if($_SESSION['order_id'])
		{
			$order_id = $_SESSION['order_id'];
		}
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>SpicePool.com - HOMEPAGE</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\login1\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 30%;
}



#add {
    
    opacity: 0.3;
    
}
.tales
{
	width: 100%;
	height: 50%;
}

.carousel-inner > .item > img 
{
      margin: 0 auto;
}

#one
{
	font-family: andalus;
	font-size: 125%;

}

.button {
    background-color: black;
    color: white;
	border: none;
    text-align: center;
    margin-left: 5%;
    cursor: pointer;
	font-family: andalus;
	padding-left: 10%;
	padding-right: 10%;
}

.button1 {font-size: 125%;}

body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 20px;
  font-family:andalus;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
  
}
</style>

<body style="background-color:#d1faea">

<!-- Div 1--><!--Search Bar-->
  <div class="row" style="background-color:white;">
		<br>
		<div class="col-md-2"><img src="34.png" style="margin-left:10%; float:left; height:150px; weight:150px;"><br><br></div>
		<div class="col-md-10" style="font-size:70px; font-family:Arial Black; margin-top:1%; color:#4d4d4d;"><b>SPICE  POOL</b></div>
  </div>


<!-- Div 2--><!--Bootstrap Navigation Bar-->
 <div class="row" style="background-color:white;">
	<div class="col-md-2" style="background-color:white;"><img src="" style="float:left;margin-left:60px;"><br><br></div>
</div>
<ul class="topnav" id="myTopnav">
  <li><a class="active" href="welcome.php"><b>HOME</b></a></li>
  <li><a class="active" href="article.php"><b>ARTICLES</b></a></li>
  <li><a class="active" href="recipe.php"><b> RECIPES</b></a></li>
   <li><a class="active" href="hv.php"><b>GO BAKING</b></a></li>
  <li><a class="active" href="#"><b>REVIEWS</b></a></li>
  <li><a class="active" href="healthmainpage.php"><b>HEALTH-TIPS</b></a></li>
  <li><a class="active" href="videos.php"><b>VIDEOS</b></a></li>
   <li><a class="active" href="contact.php"><b>CONTACT US</b></a></li>
  <li><a class="active" href="login.php"><b>LOGIN</b></a></li>
  <li><a class="active" href="register.php"><b>REGISTER</b></a></li>
  <li><a class="active" href="search.php"><i class="fa fa-search" aria-hidden="true" style="color:white;"></i></a></li>

  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="">☰</a>
  </li>
  <form>
  <br/><br/><br/>
</form>
</ul>

<div style="padding-left:16px">
  
</div>
	<body>
		<a href="order.php"><center> Click here to go back to Ordering Page</center></a>
		<br/><br/>
		<?php		
			if(isset($_POST['top_name']))
				{
					$top_name = mysql_real_escape_string($_POST['top_name']);
					$query = mysql_query("SELECT t_id FROM toppings WHERE t_name = '$top_name' ") or die(mysql_error());
					$row = mysql_fetch_assoc($query);
					$top_id = $row['t_id'];
					$query = mysql_query("INSERT INTO top_orders(order_id, top_id) VALUES ($order_id ,'$top_id')") or die(mysql_error());
				}
				
				Print "<center><b>The items which you have ordered</b></center>";
				Print "<br/><br/>";
				Print "<center><table border='1px' width='50%'>";
						Print "<tr>";
						Print "<th>item_name</th>";
						Print  "<th>price</th>";
						Print  "<th>Cuisine</th>";
						Print "</tr>";
						$query = mysql_query("SELECT i.item_name, i.price , i.cuisine FROM menu i, item_ordered it WHERE it.order_id = $order_id and it.item_id = i.item_id ;  ");
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
								Print '<td align="center">'. $row['item_name'] . "</td>";
								Print '<td align="center">'. $row['price']. "</td>";
								Print '<td align="center">'. $row['cuisine']. "</td>";
							Print "</tr>";
						}
				Print "</table></center>";
				$query = mysql_query("SELECT sum(i.price) tot_amt_itm FROM menu i, item_ordered it WHERE it.order_id = $order_id and it.item_id = i.item_id ; ") or die(mysql_error());
				$row = mysql_fetch_array($query);
				Print"<br/><br/>";
				Print "<center><b>Total amount of the food items which you have ordered ".$row['tot_amt_itm']."</center>";
				print "<br/><br/>";
				Print "<center><b>Suggested toppings available For the food items You have have choosen <br/></center>";
				Print "<center><table border='1px' width='50%'>";
						Print "<tr>";
						Print "<th>tooping name</th>";
						Print  "<th>Category</th>";
						Print  "<th>Price</th>";
						Print "</tr>";
						$query = mysql_query("SELECT t.t_name, t.t_category, t.price FROM toppings t , menu m, item_ordered io WHERE t.t_category IN (SELECT m.cuisine FROM menu m, item_ordered io WHERE io.order_id =$order_id AND io.item_id=m.item_id) GROUP BY (t.t_name) ORDER BY (t.price) LIMIT 10 ;  ") or die(mysql_error());
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
								Print '<td align="center">'. $row['t_name'] . "</td>";
								Print '<td align="center">'. $row['t_category']. "</td>";
								Print '<td align="center">'. $row['price']. "</td>";
							Print "</tr>";
						}
				Print "</table></center>";
				
				Print "<center><b>Toppings which You have ordered</center>";
				Print "<br/><br/>";
				Print "<center><table border='1px' width='50%'>";
						Print "<tr>";
						Print "<th>item_name</th>";
						Print  "<th>price</th>";
						Print  "<th>Cuisine</th>";
						Print "</tr>";
						$query = mysql_query("SELECT t.t_name,  t.t_category,t.price  FROM toppings t, top_orders tor WHERE tor.order_id = $order_id and tor.top_id = t.t_id ;  ") or mysql_error();
						while($row = mysql_fetch_array($query))
						{
							Print "<tr>";
								Print '<td align="center">'. $row['t_name'] . "</td>";
								Print '<td align="center">'. $row['t_category']. "</td>";
								Print '<td align="center">'. $row['price']. "</td>";
							Print "</tr>";
						}
				Print "</table></center>";
				$query = mysql_query("SELECT sum(t.price) tot_amt_top FROM toppings t, top_orders tor WHERE tor.order_id = $order_id and tor.top_id = t.t_id ; ") or die(mysql_error());
				$row = mysql_fetch_array($query);
				Print "<center><b>Total amount of the toppings items which you have ordered ".$row['tot_amt_top']."</center>";
		?>
		<center><form action="top_ord.php" method="POST">
			<br/>
			Enter the Topping name that you want to order &nbsp &nbsp
			<input type = "text" type = "submit" name = "top_name"/>
		</form></center>
		<center><form action="bill.php" method="POST">
			<br/>
			Click here to proceed towards billing
			<input type="Submit" Value="Bill" name="Bill"/>
		</form></center>
		
		<!--FOOTER-->	  
<br><br><br><br><br><br><br><br><br><br>
<div class="row">
	
	<div class="col-md-6" style="background-color:black; color:white; font-family: franklin gothic; font-size: 16px; text-align: center;"><br><br><br><br>
	<b><i class="fa fa-map-marker" aria-hidden="true" style="color:white;"></i>  ADDRESS:</b> <br><b style="color:grey;"> Unit 2, #930 G, <br> 1st D Main Road, <br> Girinagar 2nd phase, <br> Banashankari 3rd stage, <br> Bangalore - 560085 </b><br><br>
	<b><i class="fa fa-envelope" aria-hidden="true" style="color:white;"></i>  Email Id:</b> <b style="color:grey;">spice.pool@gmail.com</b><br><br>
	<b><i class="fa fa-globe" aria-hidden="true" style="color:white;"></i>  Website:</b> <b style="color:grey;">www.SpicePool.com</b>
	<br><br><br><br><br>
	</div>
	
	<div class="col-md-6" style="background-color:black; color:white; font-family: franklin gothic; font-size: 16px; text-align: center;"><br><br><br><br>
	<b>Developers: </b> <br> <b style="color:grey;"><i class="fa fa-thumb-tack" aria-hidden="true" style="color:grey;"></i> Bhoomika Rao <br> 01FB15ECS069 <br><br> <i class="fa fa-thumb-tack" aria-hidden="true" style="color:grey;"></i> Chinmayee Shenvi <br> 01FB15ECS077 <br><br> <i class="fa fa-thumb-tack" aria-hidden="true" style="color:grey;"></i> Yashaswi Shetty <br> 01FB15ECS084 </b>
	<br><br><br><br><br><br>
	</div>
</div>	  
	</body>
</html>	
		