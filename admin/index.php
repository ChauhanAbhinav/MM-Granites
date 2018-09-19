<?php
session_start();
require 'config.php';
?>
<?php
if(isset($_POST['login']))
{
	extract($_POST);
	$query="SELECT * FROM `admin` WHERE `username`='".$user."' and  `password`='".$password."'";
	$data=mysqli_query($dbcon,$query) or die(mysqli_error($dbcon));
	$res=mysqli_fetch_array($data);
	if($res['username']==$user and $res['password']==$password)
	{
		$_SESSION['sid']=$res['username'];
		$_SESSION['user']=$res['name'];
		header("location:admin.php");	
	}
	else
	{
		$wrong_id_pw="<div class='alert alert-warning'><span>Warning!</span>User ID and Password does not match</div>";	
	}
	 
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MM Granites</title>
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo-32.png">
    <link rel="icon" type="image/png" href="assets/img/logo-32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/logo-32.png" sizes="16x16">

    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login" style="background-color:black">
   <div class="container-fluid">
 <div class="row">
<div class="col-sm-4 col-md-4 col-lg-4">

</div>
<div class="col-sm-4 col-md-4 col-lg-4">
<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post" class="form form-horizontal">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control"  name="user"  placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div style="margin-left:25%">
                <input class="btn btn-default submit" type="submit" name="login" id="login" value="Login">
              </div>
        <div class="clearfix"></div>
              <div class="separator">
          <div class="text-center"><?php echo @$wrong_id_pw;?></div>
                <p class="change_link"><a href="../index.php">Visit MM Granites Website</a></p>
                

              </div>
               <hr>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>
  
    </div>

   </div>
  </body>
</html>
