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
			<h1 style="color: white;margin-top:50px">Projects</h1>
			<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">Projects</a>
			</h5>
		</div>

	</div>
</div>
</section>

<section>
	<div class="container-fluid">
				<div class="jumbo">
				<h4>More of What You Want</h4>
				</div>
	</div>
</section>

<section style="margin-top: 30px;">	
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
$p=($p-1)*8;
}
 	$q="SELECT * FROM `projects` LIMIT  $p,8";  


}
else
{
	$q="SELECT * FROM `projects` LIMIT  0,8";
}
   $d=mysqli_query($dbcon,$q);
   while($res=mysqli_fetch_array($d))
   {


	?>


<div class=" col-sm-3" style="height: 400px">
<figure>
	<img src="admin/<?php echo $res['image'];   ?>" style="height: 200px;width: 100%">
<figcaption>
	<h3><?php 
			if(strlen($res['name']) > 20)
		echo substr($res['name'],0,20)."...";
			else
				echo $res['name'];

		?>
	</h3>

<p>
<?php 
	if(strlen($res['description']) > 120)
		echo substr($res['description'],0,120)."...";
		else echo $res['description'] ;
?><br>
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
   $query1=mysqli_query($dbcon,"SELECT * FROM `projects` ");
   $row=mysqli_num_rows($query1);


   $row=$row/8;

   $row1=ceil($row);

   
	?>
	<div class="jumbo" style="margin-right: -30px;margin-left: -30px;margin-top: 0px;">
		<strong>Page: </strong>
		<?php
		for($i=1;$i<=$row1;$i++)
    {
	?>
    <a style="text-decoration: none" href="projects.php?page=<?php echo $i; ?>"> <?php echo $i ; ?> </a> 
   <?php
    }
   ?>
	</div>
</div>

</section>
 <?php
include 'footer.php';
 ?>
</body>
</html>