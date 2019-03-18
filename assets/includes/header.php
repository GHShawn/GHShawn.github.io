<!--ShunYong Weng-->
<!--March 09,2018 --> 
<!--ISTE240 Individual Project2--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="assets/js/JavaScript.js"></script>
</head>

<body>

<div id="<?php echo $page; ?>">

<div class="div1">
	<ul>
		<li><a <?php echo (isset($page) && $page=='homepage') ? ' class="current" ' : '' ?> href="index.php">Homepage</a></li>
		<li class="dropdown">
		<a <?php echo (isset($page) && $page=='food') ? ' class="current" ' : '' ?> href="food.php">Food</a>
	<div class="dropdown-content">
		<a <?php echo (isset($page) && $page=='food') ? ' class="current" ' : '' ?> href="food.php">Asian Food</a>
		<a href="mfood.php">Mexican Food</a>
		<a href="afood.php">American Food</a>
	</div>
		</li>
	<li class="dropdown">
		<a <?php echo (isset($page) && $page=='movies') ? ' class="current" ' : '' ?> href="movies.php">Fun</a>
	<div class="dropdown-content">
		<a <?php echo (isset($page) && $page=='movies') ? ' class="current" ' : '' ?> href="movies.php">Movies</a>
		<a href="karaoke.php">Karaoke</a>
		<a href="amusement.php">Amusement Park</a>
	</div>
	</li>
	<li class="dropdown">
	<a <?php echo (isset($page) && $page=='hotel') ? ' class="current" ' : '' ?> href="hotel.php">Relax</a>
	<div class="dropdown-content">
		<a <?php echo (isset($page) && $page=='hotel') ? ' class="current" ' : '' ?> href="hotel.php">Hotel</a>
		<a href="spa.php">Spa</a>
		<a href="bar.php">Bar</a>
	</div>
	</li>
	
	<li class="dropdown">
	<a <?php echo (isset($page) && $page=='about') ? ' class="current" ' : '' ?> href="about.php">More</a>
	<div class="dropdown-content">
		<a <?php echo (isset($page) && $page=='about') ? ' class="current" ' : '' ?> href="about.php">About</a>
		<a href="grading.php">Grading</a>
		<a href="references.php">References</a>
	</div>
	</li>
	<li><a <?php echo (isset($page) && $page=='comment1') ? ' class="current" ' : '' ?> href="comment.php">Comment</a></li>
	</ul>
</div>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<h4 style="color:white;font-size:30px;left:0;text-align:left;margin-left:13%"><?php echo $header; ?></h4>
	<img src="<?php echo $image; ?>" style="float:left; margin-left:10%; padding-bottom:0.5em; width:250px; height:200px" alt="bg"/>
		<a href="index.php">Homepage</a>
		<div class="dropdown">
		<a href="food.php" class="dropbtn">Food</a>
		<div class="dropdown-content">
			<a href="food.php">Asian Food</a>
			<a href="mfood.php">Mexican Food</a>
			<a href="afood.php">American Food</a>
		</div>
		</div>
	<div class="dropdown">
		<a href="movies.php" class="dropbtn">Fun</a>
	<div class="dropdown-content">
		<a href="movies.php">Movies</a>
		<a href="karaoke.php">Karaoke</a>
		<a href="amusement.php">Amusement Park</a>
	</div>
	</div>
	<div class="dropdown">
	<a href="hotel.php" class="dropbtn">Relax</a>
	<div class="dropdown-content">
		<a href="hotel.php">Hotel</a>
		<a href="spa.php">Spa</a>
		<a href="bar.php">Bar</a>
	</div>
	</div>
	<div class="dropdown">
	<a href="about.php" class="dropbtn">More</a>
	<div class="dropdown-content">
		<a href="about.php">About</a>
		<a href="grading.php">Grading</a>
		<a href="references.php">References</a>
	</div>
	</div>
	<div><a href="comment.php">Comment</a></div>
</div>

<i onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-arrow-circle-up"></i>

	<div onclick="endpop()" id = "bigImg">
		<img id="showimg" src="assets/images/bg.jpg" alt="bg"/>
	</div>
<div id="ham">
  <span style = "font-size:50px; line-height:0px; margin-top:3.5%; cursor:pointer; color:black; position:fixed" onclick="openNav()">&#9776;</span>
</div>
