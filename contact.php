<?php


		if(isset($_POST['contact_submit']))
		{
       $name=$_POST['name'];
$mobile=$_POST['mobile'];
$from=$_POST['email'];

$message=$_POST['message'];
$subject="Received mail from '$name'";
$to="contact@abhinv.co";

$headers .="MIME-VERSION: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
$headers ="From : <$from> \r\n";
		if(mail($to,$subject,$message,$headers))
		{
		echo'<script>
		alert("Thanks.. Request..We will Contact You Soon.");
		
		</script>';
		}
		else
		{
		echo"failed in sending the mail";
		}
		
		}
		
		?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MM Granites</title>
    <link rel="icon" type="image/png" href="assets/mmg logo.svg" sizes="16x16">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/css_product.css">
<link rel="stylesheet" type="text/css" href="css/header-footer.css">
</head>
<body>

<?php 
include 'header.php';
?>

<section class="banner-section-contact" style="background-image: url('assets/img/contact us.jpg');height:150px ">
<div class="container-fluid" id="product_banner"> 
<div class="row">
<div class="col-sm-3">
<h1 style="color: white;margin-top:50px">Contact Us</h1>


<h5 ><a style="color: white;text-decoration: none" href="index.php">Home /</a><a style="color: white;text-decoration: none" href="#">Contact Us</a></h5>
</div>

</div>
</section>

<section>
	<div class="container-fluid">
    
        <div class="jumbo" style="margin-top: 0px;margin-bottom: 50px;">
        <h4 style="color:#555555"><strong>Get in Touch</strong></h4>
      </div>
	
  <div class="row">
		<div class="col-sm-6" style="text-align: right;">
        <form action="#" method="post">
        	<div class="form-group">
            <input type="text" name="name" placeholder="Your Name" class="form-control" required="required">

        	</div>
            <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" class="form-control" required="required">

        	</div>
            <div class="form-group">
            <input type="number" name="mobile" placeholder="Your Mobile" class="form-control" required="required" min="6000000000" max="9999999999">

        	</div>
           <div class="form-group">
           	<textarea rows="7" cols="20" placeholder="Your Query" name="message" class="form-control"></textarea>
             </div>
             <div class="form-group" style="text-align:center;">
             <input type="submit" name="contact_submit" class="mm-button" style="background-color: #e75143;color: black;">

             </div>
             
            
        </form>
    </div>
       <div class="col-sm-6">
          <div class="col-sm-12">
            <?php  
    include 'config.php';
    $query="SELECT * FROM `company_address` ORDER BY `id` DESC";
    $data1=mysqli_query($dbcon,$query);
    $result1=mysqli_fetch_array($data1);
    ?>
            <blockquote style="text-align: left;">
          	  Address
       	      <footer>
       	  	  <br>
       		   <?php echo $result1['add_1'] ; ?>
             <br>
       		   <?php echo $result1['add_2'] ; ?>
             <br>
             <?php echo $result1['add_3'] ; ?>
             <br>
             <?php echo $result1['add_4'] ; ?>
             <br>
             <?php echo $result1['add_5'] ; ?>
             <br>
       	      </footer>
            </blockquote>
          </div>
       
       <div class="col-sm-12">
         <?php  
    include 'config.php';
    $query="SELECT * FROM `company_contacts` ORDER BY `id` DESC";
    $data1=mysqli_query($dbcon,$query);
    $result2=mysqli_fetch_array($data1);
    ?>
        <blockquote style="text-align: left;">
       	Contact Details
       	<footer>
       		<br>
       		<strong>Phone:-</strong><?php echo $result2['phone'] ; ?><br>
       		<strong>Fax:-</strong><?php echo $result2['fax'] ; ?><br>
       		<strong>Email:-</strong><?php echo $result2['email'] ; ?><br>
       	  </footer>
        </blockquote>
        </div>
	 </div>
</div>

</div>
</section>
<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Prestige%20Stone%20.village%20Kohra%2C(%20lakha%20)%20teh.%20Fathegarh%2C%20Jaisalmer%2C%20Jaisalmer%2C%20Rajasthan%20345027&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="350" frameborder="0" style="border:0;margin-bottom: -5px;margin-top: 30px;" allowfullscreen>></iframe>
 <?php
include 'footer.php';
 ?>

