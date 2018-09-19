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
</head>
<body>

<div class="container-fluid">
<?php 
include 'header.php';
?>

</div>
<section style="background-image: url('assets/img/projects img.jpg');height:150px ">
<div class="container-fluid" id="product_banner"> 
<div class="row">
<div class="col-sm-3">
<h1 style="color: white;margin-top:50px">Projects</h1>


<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">Projects</a></h5>
</div>

</div>

</section>
<section>
	<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="jumbo" >
<center><h3>More of What You Want</h3></center>
	</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">

<div class="col-sm-12">
	<?php 
   include 'config.php';
   $q="SELECT * FROM `projects`";
   $d=mysqli_query($dbcon,$q);
   while($res=mysqli_fetch_array($d))
   {


	?>
<div class=" col-sm-3">
<figure>
	<img src="admin/<?php echo $res['image'];   ?>" style="height: 150px;width: 100%">
<figcaption>
	<h3><?php echo $res['name'];   ?></h3>
<p class="text-info">

<?php echo $res['description'];   ?>
<br>
<br>
</p>
</figcaption>
</figure>


</div>
<?php  }?>

</div>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="jumbo" >
<center>Space for Pagination</center>

</div>


</div>
</div>
	</div>

</section>
<div class="container-fluid">
 <?php
include 'footer.php';
 ?>
</div>
