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
<link rel="stylesheet" type="text/css" href="css/css_product.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">
<link rel="stylesheet" type="text/css" href="css/aboutus.css">
</head>
<body>

<?php 
include 'header.php';
?>

<section style="background-image: url('assets/img/about.jpg');height:150px ">
<div class="container-fluid" id="product_banner"> 
<div class="row">
<div class="col-sm-3">
<h1 style="color: white;margin-top:50px">About Us</h1>
<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">About Us</a></h5>
</div>
</div>
</section>
<section>
	<div class="container-fluid">
	<div class="jumbo" style="padding: 10px;">
	<?php 
   include 'config.php';
   $q="SELECT * FROM `mission` order by `id` desc";
   $d=mysqli_query($dbcon,$q);
  	$res=mysqli_fetch_array($d);
	?>

	<h4><?php echo $res['heading'] ?></h4>
	</div>
	<div class="row">
		<div class="col-sm-12 our-mission-text">
			<span class="">
				<p><?php echo $res['content']?></p>
			</span>
		</div>
	</div>
	</div>	
</section>

<section style="margin-top: 20px;">
	<div class="container-fluid">
	<div class="jumbo">
		<h3>Our Team</h3>
		<h5>Pillers of our company</h5>
	</div>
	</div>
	</section>

<section>
<div class="container-fluid">
<div class="row">
<?php 
$q1="SELECT * FROM `team`";
 $d1=mysqli_query($dbcon,$q1);
  	while($res1=mysqli_fetch_assoc($d1))
  	 {
	?>
<div class="col-sm-4 team-col">
<figure>
	<img src="admin/<?php echo $res1['profile_photo'];?>" class="team-img">
<figcaption>
	<h3><?php echo $res1['name'];?></h3>
<p class="post-text">
<?php echo $res1['designation'];?>
</p>
<p class="team-about-text">
<?php echo $res1['qualification'];?>
</p>
</figcaption>
</figure>
</div>
<?php 
}
?>
</div>
</div>
</section>

 <?php

include 'footer.php';
 ?>
