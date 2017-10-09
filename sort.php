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

	<?php
		session_start();
		if($_SESSION['user']){ // checks if the user is logged in  
		}
		else
		{
			header("location: welcome.php"); // redirects if user is not logged in
		}
		$user = $_SESSION['user'];
		$cust_id = $_SESSION['cust_id'];
		
		$order_dec = ""; // set var to avoid errors
		$i_name = "";
		$res_name = "";
		if(isset($_POST['order_dec']))
		{
			$order_dec = mysql_real_escape_string($_POST['order_dec']);
		}
		if(isset($_POST['i_name']))
		{
			$i_name = mysql_real_escape_string($_POST['i_name']);
		}
		if(isset($_POST['res_name']))
		{
			$res_name = mysql_real_escape_string($_POST['res_name']);
		}
		if(isset($_POST['chef_name']))
		{
			$chef_name = ($_POST['chef_name']);
		}
		if(isset($_POST['cuisine']))
		{
			$cuisine = ($_POST['cuisine']);
		}
	?>
	<head>
        <title>Item displaying page</title>
    </head>
	
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
        <center><a href="logout.php"><b>Click here to go logout</a><br/><br/>
		<a href="addupdate.php">Click here to update your address </a><br/><br/>
		<a href="mainpage.php">Click here to go to back</a>
		 <h3>Hello <?php Print "$user"?>!</h3>
		<h2 align="center">Food Available</h2></b></center>
		<table border="1px" width="100%">
			<tr>
				<th>item_name</th>
				<th>veg_non</th>
				<th>price</th>
				<th>cuisine</th>
				<th>category</th>
			</tr>
			<?php   
			mysql_connect("localhost", "root","yashu") or die(mysql_error()); //Connect to server
			mysql_select_db("spicepool") or die("Cannot connect to database"); //Connect to database
			if(isset($_POST['order_dec']))
			{
				$query = mysql_query("SELECT * from menu order by (price) desc") or die (mysql_error());
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
			}
			
			if(isset($_POST['i_name']))
			{
				$query = mysql_query("SELECT * FROM menu m , ingredients ing WHERE ing.i_name <> '$i_name' and m.item_id = ing.item_id ") or die (mysql_error());
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
			}
			
			if(isset($_POST['res_name']))
			{
				$res_name ='';
				$res_name = $_POST['res_name'];
				$query = mysql_query("SELECT m.item_name ,m.veg_non, m.price,m.cuisine,m.category FROM menu m INNER JOIN  menu_made_in mmi ON mmi.item_id = m.item_id  INNER JOIN restaurant r ON r.res_id = mmi.res_id WHERE r.rest_name ='$res_name' order by (m.price);") or die (mysql_error());
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
			}
			
			if(isset($_POST['chef_name']))
			{
				$query = mysql_query("SELECT * FROM menu i, chef c ,prep_by p where i.item_id = p.item_id and p.chef_id = c.chef_id and c.chef_name  = '$chef_name' ") or die (mysql_error());
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
			}
			if(isset($_POST['cuisine']))
			{
				$query = mysql_query("SELECT *FROM menu WHERE cuisine = '$cuisine'") or die (mysql_error());
				while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
			}
			
				
		?>
		
	<!--
	if(i_name!='')
	{
		 $query = mysql_query("SELECT * FROM menu m , ingredients ing WHERE ing.i_name <> 'Nachos' and m.item_id = ing.i_name ") or die (mysql_error());
		 while($row = mysql_fetch_array($query))
				{
					Print "<tr>";
						Print '<td align="center">'. $row['item_name'] . "</td>";
						Print '<td align="center">'. $row['veg_non'] . "</td>";
						Print '<td align="center">'. $row['price']. "</td>";
						Print '<td align="center">'. $row['cuisine']. "</td>";
						Print '<td align="center">'. $row['category']. "</td>";
					Print "</tr>";
				}
	}*/
}	-->
		</table>
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