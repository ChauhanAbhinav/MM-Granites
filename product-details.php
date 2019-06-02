<?php 
/*$did=$_GET['prod_id'];*/
include 'config.php';

$query="SELECT * FROM `products` ORDER BY `id` DESC ";
$data=mysqli_query($dbcon,$query);
$res2=mysqli_fetch_array($data);


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MM Granites</title>
    <link rel="icon" type="image/png" href="assets/img/logo-32.png" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/css_product.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">
</head>
<body>

<?php 
include 'header.php';
?>

<section class="banner-section" style="background-image: url('assets/img/products.jpg');height:150px ">
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
					<h4><strong>Our Products are Our Main Strength</strong></h4>
				</div>
				</div>
</section>
<script>
function changeImage(a)
{
var image=a;

document.getElementById("big_img").src=a;

}

</script>
<section style="margin-top: 20px;">	
<div class="container">
<div class="row">
<div class="col-sm-6">
	<figure>
		<img src="assets/img/prd1.jpg" id="big_img" style="margin: 0px auto;" class="img-responsive">
	</figure>

	<div class="row" style="margin-top:20px">
		<div class="col-xs-3">
			<figure>
				<img class="sm_img1 img-responsive" src="assets/img/prd1.jpg" onclick="return changeImage('assets/img/prd1.jpg')" style="height:100px;cursor:pointer;" title="Click for Larger Image">
			</figure>
		</div>
		<div class="col-xs-3 ">
			<figure>
				<img class="sm_img1 img-responsive" src="assets/img/prd2.jpg" onclick="return changeImage('assets/img/prd2.jpg')" style="height:100px;cursor:pointer" title="Click for Larger Image" >
			</figure>
		</div>
		<div class="col-xs-3 ">
			<figure>
			<img class="sm_img1 img-responsive" src="assets/img/prd3.jpg" onclick="return changeImage('assets/img/prd3.jpg')" style="	height:100px;cursor:pointer" title="Click for Larger Image">
			</figure>
		</div>
		<div class="col-xs-3 ">
			<figure>
				<img class="sm_img1 img-responsive" src="assets/img/prd4.jpeg" onclick="return changeImage('assets/img/prd4.jpeg')" style="height:100px;cursor:pointer" title="Click for Larger Image" >
			</figure>
		</div>
	</div> 
</div>

<div class="col-sm-6">
<h2><?php echo $res2['name'] ?></h2>
<br>
<p>
	<?php echo $res2['description'] ?>
</p>
</div>
</div>
<div class="row" style="margin-top: 40px;">
	<div class="col-sm-4">
	<figure>
		<img src="assets/img/prdmm1.jpeg" id="prd_size_img" style="margin: 0px auto;" class="img-responsive">
	</figure>
	<figcaption class="prd_caption"> 18mm-20mm</figcaption>
	</div>
	<div class="col-sm-4">
	<figure>
		<img src="assets/img/prdmm2.jpeg" id="prd_size_img" style="margin: 0px auto;" class="img-responsive">
	</figure>
	<figcaption class="prd_caption"> 70mm-80mm</figcaption>
	
	</div>
	<div class="col-sm-4">
	<figure>
		<img src="assets/img/prdmm3.jpeg" id="prd_size_img" style="margin: 0px auto;" class="img-responsive">
	</figure>
	<figcaption class="prd_caption"> 200mm-210mm</figcaption>
	</div>
</div>

</div>
</section >
<section style="margin-top:20px">
 <?php
include 'footer.php';
 ?>
 </section>
</body>
</html>