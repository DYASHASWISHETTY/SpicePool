<?php
	session_start();
	$cust_name = mysql_real_escape_string($_POST['cust_name']);
	$cust_pass = mysql_real_escape_string($_POST['cust_pass']);
	mysql_connect("localhost", "root","yashu") or die(mysql_error()); //Connect to server
	mysql_select_db("spicepool") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from customers WHERE cust_name='$cust_name'") or die (mysql_error()); //Query the users table if there are matching rows equal to $username
	$exists = mysql_num_rows($query); //Checks if username exists
	
	$cust_id = "";
	$table_users = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysql_fetch_assoc($query) ) //display all rows from query
		{
			$table_users = $row['cust_name']; // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['cust_pass']; // the first password row is passed on to $table_users, and so on until the query is finished
			$cust_id = $row['cust_id'];
		}
		if(($cust_name == $table_users) && ($cust_pass == $table_password)) // checks if there are any matching fields
		{
				if($cust_pass == $table_password)
				{
					$_SESSION['cust_id'] = $cust_id;
					$_SESSION['user'] = $cust_name; //set the username in a session. This serves as a global variable
					header("location: mainpage.php"); // redirects the user to the authenticated home page
					}
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
		}
	}
	else
	{
		Print '<script>alert("Incorrect Customer Name!");</script>'; //Prompts the user
		Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
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