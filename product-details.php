<?php 
$did=$_GET['prod_id'];
include 'config.php';

$query="SELECT * FROM `products` WHERE `id`='".$did."' ";
$data=mysqli_query($dbcon,$query);
$res2=mysqli_fetch_array($data);


?>


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

<?php 
include 'header.php';
?>

<section style="background-image: url('assets/img/products.jpg');height:150px ">
<div class="container-fluid" id="product_banner"> 
	<div class="row">
		<div class="col-sm-3">
			<h1 style="color: white;margin-top:50px">Products</h1>
			<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">Products</a>
			</h5>
		</div>

	</div>
</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbo">
					<center><h3>Our Products are Our Main Strength</h3></center>
				</div>
			</div>
		</div>
	</div>
</section>

<section style="margin-top: 20px;">	
<div class="container">
<div class="row">
<div class="col-sm-6">
<figure>
	<img src="admin/<?php echo $res2['image'] ?>" style="width: 100%">

</figure>


</div>
<div class="col-sm-6">
<h2><?php echo $res2['name'] ?></h2>
<br>
<p>
	<?php echo $res2['description'] ?>
</p>
</div>

</div>
</div>
</section>
 <?php
include 'footer.php';
 ?>
</body>
</html>