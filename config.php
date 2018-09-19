<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="marble";
$dbcon=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(mysqli_error());

############DataBase Connection######################
$rqst_uri=$_SERVER['REQUEST_URI'];
$rqst_uri_array=explode('/',$rqst_uri);
//print_r($rqst_uri_array);
#####Header###

?>