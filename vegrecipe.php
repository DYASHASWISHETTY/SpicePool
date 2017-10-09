<!DOCTYPE html>

<html lang="en">
<head>
  <title>SpicePool</title>
    <link rel="shortcut icon" href="icon1.jpg" />

  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\login1\font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
.tales
{
	width: 100%;
	height: 50%;
}

#one
{
	font-family: andalus;
	font-size: 125%;
}

.image { 
   position: relative; 
   width: 100%;
}

#box { 
   position: absolute; 
   top: 200px; 
   left: 0; 
   width: 100%; 
   font-family:verdana; 
   font-size:125%; 
   text-align:center;
}
img:hover {
    opacity: 0.2;
    filter: alpha(opacity=70);
}
#ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

#li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

#li a.active {
    background-color: #cc3300;
    color: white;
}

#li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
#nbar{
	font-size: 100%;
	font-family: verdana;
}

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

<body style="background-color:#f1f1f1">

<!-- Div 1--><!--Search Bar-->
  <div class="row" style="background-color:white;">
		<br>
		<div class="col-md-2"><img src="34.png" style="margin-left:10%; float:left; height:150px; weight:150px;"><br><br></div>
		<div class="col-md-4" style="font-size:70px; font-family:Arial Black; margin-top:1%; color:#4d4d4d;"><b>SPICE  POOL</b></div>
		<div class="col-md-6"></div>
  </div>


<!-- Div 2--><!--Bootstrap Navigation Bar-->
 <div class="row" style="background-color:white;">
	<div class="col-md-2" style="background-color:white;"><img src="" style="float:left;margin-left:60px;"><br><br></div>
</div>
<ul class="topnav" id="myTopnav">
 <li><a class="active" href="welcome.php"><b>HOME</b></a></li>
  <li><a class="active" href="article.php"><b>ARTICLES</b></a></li>
  <li><a class="active" href="vegrecipe.php"><b> RECIPES</b></a></li>
   <li><a class="active" href="hv.php"><b>GO BAKING</b></a></li>
  <li><a class="active" href="#about"><b>REVIEWS</b></a></li>
  <li><a class="active" href="healthmainpage.php"><b>HEALTH-TIPS</b></a></li>
  <li><a class="active" href="videos.php"><b>VIDEOS</b></a></li>
   <li><a class="active" href="contact.php"><b>CONTACT US</b></a></li>
  <li><a class="active" href="login.php"><b>LOGIN</b></a></li>
  <li><a class="active" href="search.php"><i class="fa fa-search" aria-hidden="true" style="color:white;"></i></a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<div style="padding-left:16px">
  
</div>
<br>
<!--BOXES-->
<!--BOX1-->
 
<div class="row">
	<div class="col-md-2" id="nbar">
		<ul id="ul">
			<li id="li"><a class="active" href="#">ASSORTED VEG RECIPES</a></li>
			<li id="li"><a href="#">NORTH INDIAN</a></li>
			<li id="li"><a href="#">SOUTH INDIAN</a></li>
			<li id="li"><a href="#">GUJARATI CUISINE</a></li>
			<li id="li"><a href="#">BENGALI DISHES</a></li>
			<li id="li"><a href="#">KONKAN SPECIALS</a></li>
		</ul>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src="images\veg1.jpg" alt="VEGETABLE CHEESE CAKE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE CHEESE CAKE</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src="images\veg2.jpg" alt="GARDEN VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>GARDEN VEGETABLE SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg3.jpg" alt="ECUADOREAN QUINOA AND VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>ECUADOREAN QUINOA SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg4.jpg" alt="VEGETABLE CHOWDER" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE CHOWDAR</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg5.jpg" alt="HERB ROASTED VEGETABLES" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>HERB ROASTED VEGETABLES</b><br/></center>
		</div>
	</div>

</div> 

<!--BOX2-->
<div class="row">
	<div class="col-md-2" id="nbar">
		<ul id="ul">
			<li id="li"><a href="#">PUNJABI DISHES</a></li>	
		</ul>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg6.jpg" alt="MARINATED VEGETABLES DELUXE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>MARINATED VEG DELUXE</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg7.jpg" alt="VEGETABLE QUICHE CUPS -SBD-" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE QUICHE CUPS</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg8.jpg" alt="SPICY VEGETABLE COUSCOUS" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>SPICY VEG COUSCOUS</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg9.jpg" alt="GRILLED VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>GRILLED VEGETABLE SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg10.jpg" alt="VEGETABLE QUICHE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE QUICHE</b><br/></center>
		</div>
	</div>

</div> 
<br>

<!--BOX3-->
<div class="row">
	<div class="col-md-2"></div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg1.jpg" alt="VEGETABLE CHEESE CAKE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE CHEESE CAKE</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg2.jpg" alt="GARDEN VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>GARDEN VEGETABLE SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg3.jpg" alt="ECUADOREAN QUINOA AND VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>ECUADOREAN QUINOA SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg4.jpg" alt="VEGETABLE CHOWDER" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE CHOWDAR</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg5.jpg" alt="HERB ROASTED VEGETABLES" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>HERB ROASTED VEGETABLES</b><br/></center>
		</div>
	</div>

</div> 
<br>

<!--BOX4-->
<div class="row">
	<div class="col-md-2"></div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg6.jpg" alt="MARINATED VEGETABLES DELUXE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>MARINATED VEG DELUXE</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg7.jpg" alt="VEGETABLE QUICHE CUPS -SBD-" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE QUICHE CUPS</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg8.jpg" alt="SPICY VEGETABLE COUSCOUS" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>SPICY VEG COUSCOUS</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg9.jpg" alt="GRILLED VEGETABLE SOUP" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>GRILLED VEGETABLE SOUP</b><br/></center>
		</div>
	</div>
	
	<div class="col-md-2">
		<div class="image">
			<a href="recipe1.php"><img src=" images\veg10.jpg" alt="VEGETABLE QUICHE" style="padding-right:10%;" /></a>
			<p id="box" style=""><b>VEGETABLE QUICHE</b><br/></center>
		</div>
	</div>

</div> 
<br>

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