<?php 
 
if(isset($_POST['contact_submit']))
{
include 'config.php';
  extract($_POST);
 
  $q1="INSERT INTO `contact`(`id`,`email`,`mobile`,`message`) VALUES ('','".$email."','".$mobile."','".$message."')";
  $d1=mysqli_query($dbcon,$q1);
  if(mysqli_affected_rows($dbcon)>0)
  {
    echo'<script>
      alert("Thanks For Your Interest..We will be back to You Soon");

    </script>';
  }
  else
  {
    echo'<script>
      alert("Technical Error..Please try after Some time");

    </script>';
  }
}

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

<div class="container-fluid">
<?php 
include 'header.php';
?>

</div>
<section style="background-image: url('assets/img/contact us.jpg');height:150px ">
<div class="container-fluid" id="product_banner"> 
<div class="row">
<div class="col-sm-3">
<h1 style="color: white;margin-top:50px">Projects</h1>


<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">Contact Us</a></h5>
</div>

</div>

</section>
<section>
	<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div class="jumbotron" style="margin-left: -15px;margin-right:-15px">
<center><h3>Get in Touch</h3></center>
	</div>
</div>
</div>

	<div class="row">
		<div class="col-sm-6">
        <form action="#" method="post">
        	
            <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" class="form-control" required="">

        	</div>
            <div class="form-group">
            <input type="number" name="mobile" placeholder="Your Mobile" class="form-control" required="">

        	</div>
           <div class="form-group">
           	<textarea rows="7" cols="20" placeholder="Your Query" name="message" class="form-control"></textarea>
             </div>
             <div class="form-group">
             <input type="submit" name="contact_submit" class="btn btn-warning"
             >

             </div>
        </form>

		</div>
       <div class="col-sm-6">
       <div class="col-sm-12">
       <blockquote>
       	Address
       	<footer>
       		<br>
       		Sector:- 123<br>
       		Block:-abc<br>
       		Jaipur (Rajasthan)
       	</footer>
       </blockquote>

       </div>
       <div class="col-sm-12">
       <blockquote>
       	Contact Details
       	<footer>
       		<br>
       		<strong>Phone:-</strong>******1234<br>
       		<strong>Fax:-</strong>******1234<br>
       		<strong>Email:-</strong>dfvbdsfvb@dvnb.com<br>
       	</footer>
       </blockquote>

       </div>
	 </div>
	 <div class="col-sm-12">
	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.99973645076!2d75.65047130354301!3d26.885141678596714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1537271082739" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	 </div>
</div>



	</div>

</section>
<div class="container-fluid">
 <?php
include 'footer.php';
 ?>
</div>
