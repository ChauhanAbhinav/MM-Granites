<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MM Granites</title>
    <link rel="icon" type="image/svg" href="assets/mmg logo.svg" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">    

<link rel="stylesheet" href="lib/owl.carousel.min.css">
<link rel="stylesheet" href="lib/owl.theme.css">
<link rel="stylesheet" href="lib/owl.transitions.css">
</head>
<body>
<?php 
include 'header.php';
?>
<!-- image slider -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/img/home.png" alt="..." class="slider-img">
      <div class="carousel-caption">
        <h1>MM GRANITES</h1>
        <span>WE BUILD YOUR DREAMS</span>
      </div>
    </div>
    <div class="item">
      <img src="assets/img/home2.png" alt="..." class="slider-img">
      <div class="carousel-caption">
       <h1>WE DELIVER </h1>
       <span>AWESOME PRODUCTS TO OUR CUSTOMER</span>
      </div>
    </div>
   <div class="item">
      <img src="assets/img/home3.png" alt="..." class="slider-img">
      <div class="carousel-caption">
       <h1>WE PROVIDE </h1>
       <span>AWESOME IDEAS</span>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 
<!-- image slider closed -->

 <section class="why_us" style="margin-top: 30px;">
 	<?php  
    include 'config.php';
    $query="SELECT * FROM `why_us_contents` ORDER BY `id` DESC";
    $data1=mysqli_query($dbcon,$query);
    $result1=mysqli_fetch_array($data1);
    ?>
<div class="container-fluid">
  	<div class="jumbo" style="color:#555555;">
  		<h4 style=""><strong><?php echo $result1['heading'];  ?></strong></h4>
  	</div>
  	
 <p class="why_us_text">
  <?php echo $result1['description'];  ?>
 </p>
</div>
 </section>
<div class="quality">
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
	MM Granites is recognized for the quality of its stones. They have been developing steadly over time, earning considerable significance in the rajasthan marble industries today.
</p>
</div>
<div class="col-md-4 col-sm-12">
<center>
	<div style="display:inline-block;background-color: white;border-radius: 100%;padding: 10px;margin-top:30px">
	<img src="assets/img/strength.png" style="zoom:60%">
	</div>
</center>
<center style="color: white;"><strong><h4>High Quantity</strong></h4></center>
<p style="color: white;padding-top: 20px;">
	MM Granites has been first choice for procuring natural stones for our projects, big or small, having a availability of wide range of stones.
</p>
</div>
<div class="col-md-4 col-sm-12">
<center>
	<div style="display:inline-block;background-color: white;border-radius: 100%;padding: 10px;margin-top:30px">
	<img src="assets/img/hammer.png" style="zoom:60%">
	</div>
</center>
<center style="color: white;"><strong><h4>High Durability</strong></h4></center>
<p style="color: white;padding-top: 20px;">
  MM granites provides very dense stone which makes it very durable and reliable material to use for any room. It can be installed everywhere in your home, office, kitchen, lobby etc.	
</p>
</div>


 </section>
</div>
 

<div class="container-fluid" style="background-color: rgba(240,240,240,0.8);color: black;margin-top: 30px;">
<!-- 
 	<center>
 		<h4 style="padding: 20px;color: #555555"><strong>Our Happy Clients</strong></h4>
 		<h5 style="color: #666666">Many Satisfied Customer Trust <strong>MM Granites</strong>
        Products & Services.
		</h5>
	</center>
	<div id="testimonial-slider" class="owl-carousel owl-theme" style="margin-top: 20px;margin-bottom: 25px;text-align: center;">
		<?php 
   include 'config.php';
   $q="SELECT * FROM `testimonials`    ";
   $d=mysqli_query($dbcon,$q);
   while($res2=mysqli_fetch_array($d))
   {


	?>
 		<div class="item" >
 			<table style="margin: auto;max-width: 650px;height: auto;"><tr>
 			<td><img class="client-img" src="admin/<?php echo $res2['image']; ?>"></td>
 			<td><spam class="client-qoute"><?php echo $res2['description']; ?></spam></td>
 			</tr></table>
 		</div>
 		<?php
 	}
 	?>
 		
 	</div>
!-->
</div>


<?php
include 'footer.php';
 ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <script src="lib/bootstrap.min.js"></script>
    <script src="lib/owl.carousel.min.js"></script>
   <script src="lib/script.js"></script>

</body>
</html>