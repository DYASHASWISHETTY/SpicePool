<!DOCTYPE html>

<html lang="en">
<head>
  <title>SpicePool</title>
    <link rel="shortcut icon" href="icon1.jpg" />

  <meta charset="utf-8">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="D:\BoredBees Internship\project\font-awesome-4.6.3\css\font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\font-awesome-4.7.0\css\font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
input[type=text] {
    width: 130px;
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
    width: 100%;
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
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
#div1 {
  font-size:48px;
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
  <form>
  <br/><br/><br/>

  
  
  
</form>
</ul>

<div style="padding-left:16px">
  
</div>


<script>

		
		
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>




  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">NAME OF FOOD</th>
    <th style="width:40%;">CUISINE</th>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
   <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
   <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
  <tr>
    <td>GOBI MANCHURIAN</td>
    <td>INDIAN</td>
  </tr>
  <tr>
    <td>LASAGNA</td>
    <td>ITALIAN</td>
  </tr>
  <tr>
    <td>FRENCH FRIES</td>
    <td>FRENCH</td>
  </tr>
  <tr>
    <td>DOSA</td>
    <td>SOUTH INDIAN</td>
  </tr>
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
<!--
<p>COOK OF THE WEEK(select from our users)</p>
<p>TOP RATED RECIPES</p>
<p>FIVE MINUTE RECIPES</p>
<p>OUR TOP CHEFS</p>
<p>ASK RATINGS AND REVIEWS FROM THE USERS</p>

<p>WHEN it enters veg recipes page, give options as Soups, Starters, Main Course, Side dish, Desserts, Breakfast, 
													South Indian, North Indian, Gujarati, Punjabi, Bengali cuisine.
													World cuisines - Italian(Pizzas, Burgers, Sandwiches and other junk), Spanish ... 
													Beverages
													Bakery
													Barbequed items
													Occassional Cuisines
													Pickles, different regional pickles, 
													For Diabetic, BP patients
</p>													
<p>BEfore contact us, keep an option PAGES so that viewers can see the items uploaded by a specific group, restaurant</p>
<p>KEEP another opton photo galler, where all delicious and yummy looking pcitures are posted. http://www.food.com/photo-gallery?pn=2</p>
<p>SUGGESTING GOOD HOTELS/RESTAURANTS FOR A PARTICULAR FOOD</p>-->

</body>    
</html>	
	