	<?php 
  include 'config.php';



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
					<center><h4>Our Products are Our Main Strength</h4></center>
				</div>
			</div>
		</div>
	</div>
</section>

<section style="margin-top: 20px;">	
<div class="container-fluid">
<div class="row">

<div class="col-sm-12">

<?php
 include 'config.php';
 if(isset($_GET['page']))
{
	$page=$_GET['page'];
	

if($page==""||$page==1)
{
$p=0;
}
else
{
	$p=$page;
$p=($p-1)*8+1;
}
 	$q="SELECT * FROM `products` LIMIT  $p,8";  


}
else
{
	$q="SELECT * FROM `products` LIMIT  0,8";
}
   $d=mysqli_query($dbcon,$q);
   while($res=mysqli_fetch_array($d))
   {


	?>

<div class=" col-sm-3">
<figure>
	<a href="product-details.php?prod_id=<?php echo $res['id'];    ?>">
	<img src="admin/<?php echo $res['image'];   ?>" style="height: 150px;width: 100%">
	</a>
<figcaption>
	<a href="product-details.php?prod_id=<?php echo $res['id'];    ?>">
	<h3><?php echo $res['name'];   ?></h3>
	</a>
<p>

<?php echo $res['brief'];   ?>
<br>
<br>
</p>
</figcaption>
</figure>


</div>
<?php
  }
?>

</div>

</div>
<div class="container-fluid">
	<?php 
   $query1=mysqli_query($dbcon,"SELECT * FROM `products` ");
   $row=mysqli_num_rows($query1);


   $row=$row/8;

   $row1=ceil($row);

   
	?>
</div>
<div class="jumbo" style="margin-top: 0px;">
		<?php
		for($i=1;$i<=$row1;$i++)
    {
	?>
    <a style="text-decoration: none" href="products.php?page=<?php echo $i; ?>"> <?php echo $i ; ?> </a> 
   <?php
    }
   ?>
	
	</div>

</section>
 <?php
include 'footer.php';
 ?>
</body>
</html>