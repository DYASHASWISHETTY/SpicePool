<!--4th sem-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SUCCESSFUL LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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
  font-size: 17px;
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

body{
	background-color:#ffffb3;
	
}
h1 {
    color:#0000ff;
}
</style>
</head>

<body>
<!--<div id='pq'><img src="C:\Users\Bhoomika R Rao\Desktop\abstract-colorful-wallpapers-full-hd.jpg"
height='100%' width='100%' ></div>-->

<div class="row" style="background-color:white;">
  
		<div class="col-md-2" style="background-color:white;"><img src="34.png" style="float:left;margin-left:60px;"><br><br></div>
		<p  style="font-size:600%;" "font-family:courier;" style="color:red;" "text-align:middle;"><b>SpicePool<b></p>
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
</ul>

<div style="padding-left:16px">
  
</div>
<center>
<h2>Registration Page </h2>
        <a href="welcome.php">Click here to go back</a><br/><br/>
        <form action="register.php" method="POST">
           Enter Customer Name: <input type="text" name="cust_name" required="required" /> <br/><br/>
           Enter password: <input type="password" name="password" required="required" /> <br/><br/>
		   Enter Email address <input type = "email" name = "cust_email" required ="required"><br/> <br/>
		   Enter phone number <input type = "number" name = "cust_pho" ><br/> <br/>
           <input type="submit" value="Register"/>
        </form>
</center>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$cust_name = mysql_real_escape_string($_POST['cust_name']);
	$password = mysql_real_escape_string($_POST['password']);
	$cust_email = mysql_real_escape_string($_POST['cust_email']);
	$cust_pho = mysql_real_escape_string($_POST['cust_pho']);
	
	
    $bool = true;
	mysql_connect("localhost", "root","yashu") or die(mysql_error()); //Connect to server
	mysql_select_db("spicepool") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from customers") or die(mysql_error()); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['cust_name']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($cust_name == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Customer Name has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO customers (cust_name, cust_pass,cust_email,cust_pho) VALUES ('$cust_name','$password','$cust_email','$cust_pho')") or die (mysql_error());//Inserts the value to table users
		//Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		//Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
}
?>