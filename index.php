<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MM Granites</title>
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo-32.png">
    <link rel="icon" type="image/png" href="assets/img/logo-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/logo-32.png" sizes="16x16">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">
<link rel="stylesheet" href="lib/owl.carousel.css">
<link rel="stylesheet" href="lib/owl.theme.css">
<link rel="stylesheet" href="lib/owl.transitions.css">

		
</head>
<body>
<?php 
include 'header.php';
?>
<!-- image slider -->

<div id="home-slider" class="owl-carousel owl-theme">
 
  <div class="item"><img src="assets/img/home.jpg">
  	<div id="banner">
  		<center>
			<p id="banner_head">Welcome to the MM Granites Pvt Lt</p>
			<h3 id="banner_tagline" style="color:white">
				We are the one of leader dealers in all kinds of marble product designs across Rajasthan.
			</h3>	
		</center>
  	</div>
  </div>
  
  <div class="item"><img src="assets/img/home2.jpg" >
  	<div id="banner-small">
  		<span class="banner-item"> Grenite</span>
  	</div>
  </div>
  <div class="item"><img src="assets/img/home3.jpg">
  	<div id="banner-small"><span class="banner-item"> Ceremic Products</span></div>
  </div>
 
</div>

 </section>
<!-- image slider closed -->

 <section class="why_us" style="margin-top: 30px;">
<div class="container-fluid">
  	<div class="jumbo">
  		<h4 style=""><strong>Why Us</strong></h4>
  	</div>
  	
 <p class="why_us_text">
   MM Granites is the leading Indian conglomerate and a global trendsetter in the world of Natural Stone.
The choice of undertaking the paths less travelled has made all the difference in the success story of M M Granite. The company was established in a simple warehouse  and ever since has been raising the bar with its quality products and superior services.

Today, M M Granite, with a keen aptitude for innovation and skill, inclination towards concurrent technological advancements, and with multiple quarries at Dharmeta, Morwad, Dhariyawad, Banswara in Rajasthan, India, along with quarries in Yên Bái province, Vietnam, has emerged as an undisputed leader in marble mining, processing, and research and technology development across the globe.
 </p>
</div>
 </section>

 <section style="background-image:url('assets/img/work.jpg'); background-position: center;">
 	<div class="container-fluid" style="background-color: rgba(0,0,0,0.5);padding-top:20px;padding-bottom: 20px;">
<div class="col-md-4 col-sm-12">
<center>
	<div style="display:inline-block;background-color: white;border-radius: 100%;padding: 10px;margin-top:30px">
	<img src="assets/img/quality.png" style="zoom:60%">
	</div>
</center>
<center style="color: white;"><strong><h4>High Quality</strong></h4></center>
<p style="color: white;padding-top: 20px;">
	Distributed under the Lesser General Public License
  This program is distributed in the hope that it will be useful without even the implied warranty.  
  This program is distributed in the hope that it will be useful without even the implied warranty.  
</p>
</div>
<div class="col-md-4 col-sm-12">
<center>
	<div style="display:inline-block;background-color: white;border-radius: 100%;padding: 10px;margin-top:30px">
	<img src="assets/img/strength.png" style="zoom:60%">
	</div>
</center>
<center style="color: white;"><strong><h4>High Quality</strong></h4></center>
<p style="color: white;padding-top: 20px;">
	Distributed under the Lesser General Public License
  This program is distributed in the hope that it will be useful without even the implied warranty.  
  This program is distributed in the hope that it will be useful without even the implied warranty.  
</p>
</div>
<div class="col-md-4 col-sm-12">
<center>
	<div style="display:inline-block;background-color: white;border-radius: 100%;padding: 10px;margin-top:30px">
	<img src="assets/img/hammer.png" style="zoom:60%">
	</div>
</center>
<center style="color: white;"><strong><h4>High Quality</strong></h4></center>
<p style="color: white;padding-top: 20px;">
	Distributed under the Lesser General Public License
  This program is distributed in the hope that it will be useful without even the implied warranty.  
  This program is distributed in the hope that it will be useful without even the implied warranty.  
</p>
</div>


 </section>
 <div class="container-fluid">
 	<div class="jumbo" style="margin-top: 0px;margin-bottom: 20px;">	
 		<h4>Our Featured Products</h4>
 		<h5>We Believe in Delivering Quality Products for Self-Satisfaction</h5>
 	</div>
 		<div class="row" id="row2">
			
<?php 
   include 'config.php';
   $q="SELECT * FROM `products` order by `id` desc limit 0,4   ";
   $d=mysqli_query($dbcon,$q);
   while($res=mysqli_fetch_array($d))
   {


	?>
<a href="product-details.php?prod_id=<?php echo $res['id'];    ?>">

<div class=" col-sm-3">
<figure>
	<img src="admin/<?php echo $res['image'];   ?>" style="height: 150px;width: 100%">
<figcaption>
	<h3><?php echo $res['name'];   ?></h3>
<p >

<?php echo $res['brief'];   ?>

</p>
</figcaption>
</figure>


</div>
</a>
<?php  }?>
			

			
			
			
		</div>
		<div class="row">
<div class="col-sm-12 col-md-12">

<center>
	<a href="products.php"><button class="btn btn-default" style="background-color:#e75143;color:white;  border: none;  zoom:150%;opacity:1">View All Products</button></a>
</center>
</div>
		</div>
		
		</div>

 <div class="container-fluid" style="background-color: rgba(240,240,240,0.8);color: black;margin-top: 30px;">
 	<center>
 		<h4 style="padding: 20px;"><strong>Our Happy Clients</strong></h4>
 		<h5>Many Satisfied Customer Trust <strong>MM Granites</strong>
        Products & Services.
		</h5>
	</center>
	<div id="testimonial-slider" class="owl-carousel owl-theme" style="margin-top: 20px;margin-bottom: 25px;text-align: center;">
 		<div class="item" >
 			<table style="margin: auto;"><tr>
 			<td><img class="client-img" src="assets/img/home.jpg"></td>
 			<td><spam class="client-qoute">Make your online shopping website livelier and user friendly with our reasonable</spam></td>
 			</tr></table>
 		</div>
 		<div class="item" >
 			<table style="margin: auto;"><tr>
 			<td><img class="client-img" src="assets/img/home.jpg"></td>
 			<td><spam class="client-qoute">Make your online shopping website livelier and user friendly with our reasonable</spam></td>
 			</tr></table>
 		</div>
 		<div class="item" >
 			<table style="margin: auto;"><tr>
 			<td><img class="client-img" src="assets/img/home.jpg"></td>
 			<td><spam class="client-qoute">Make your online shopping website livelier and user friendly with our reasonable</spam></td>
 			</tr></table>
 		</div>
 	</div>
</div>

<?php
include 'footer.php';
 ?>
<script src="lib/jquery.min.js"></script>
<script src="lib/owl.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 
  $("#home-slider").owlCarousel({
 
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
 	  autoPlay:true
 });
$("#testimonial-slider").owlCarousel({
  	  navigation : true,
      slideSpeed : 100,
      paginationSpeed : 400,
      singleItem:true,
 	  autoPlay:true
  }); 
});
</script>
</body>
</html>