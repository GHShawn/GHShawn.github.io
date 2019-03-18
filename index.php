<!--ShunYong Weng-->
<!--March 09,2018 --> 
<!--ISTE240 Individual Project1--> 
<?php 
$page="homepage";
$header="Homepage";
$image="assets/images/bg.jpg";
include('assets/includes/header.php');?>

     <div class="box">
       <img onclick="go();" id="logo" style="position:relative; left:2px;" src="assets/images/logo1.png" alt="logo">
       <h1>NYC</h1>
     </div>

     <div class="box1">
	   <p class="homehead">Food</p>
       <a class="text" href="food.php">Learn more</a>
     </div>

     <div class="box2">
	    <p class="homehead">Fun</p>
       <a class="text" href="movies.php">Learn more</a>
     </div>

     <div class="box3">
	    <p class="homehead">Relax</p>
       <a class="text" href="hotel.php">Learn more</a>
     </div>
 
<?php include('assets/includes/footer.php');?>
