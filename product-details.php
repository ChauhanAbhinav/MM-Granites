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
			<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="products.php">Products /</a><a style="color: white;text-decoration: none" href="#">Product Details</a>
			</h5>
		</div>

	</div>
</div>
</section>

<section>
				<div class="container-fluid">
				<div class="jumbo">
					<h4>Our Products are Our Main Strength</h4>
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

<div class="container-fluid">
<div class="jumbo" style="margin-top: 20px;margin-bottom: 20px;margin:;">
<h4>Recent Products</h4>
</div>

<?php 
   include 'config.php';
   $q="SELECT * FROM `products` order by `id` desc limit 0,4   ";
   $d=mysqli_query($dbcon,$q);
   while($res=mysqli_fetch_array($d))
   {


	?>

<div class=" col-sm-3" style="height: 300px;">
<figure>
	<a href="product-details.php?prod_id=<?php echo $res['id'];    ?>">
	<img src="admin/<?php echo $res['image'];   ?>" style="height: 150px;width: 100%">
	</a>
<figcaption>
	<a href="product-details.php?prod_id=<?php echo $res['id'];    ?>">
	<h3><?php 
			if(strlen($res['name']) > 20)
		echo substr($res['name'],0,20)."...";
			else
				echo $res['name'];

		?></h3>
	</a>
<p>

<?php 
			if(strlen($res['brief']) > 120)
		echo substr($res['brief'],0,120)."...";
			else
				echo $res['brief'];

		?>
<br>
<br>
</p>
</figcaption>
</figure>
</div>
</a>
<?php  }?>

</section>
 <?php
include 'footer.php';
 ?>
</body>
</html>