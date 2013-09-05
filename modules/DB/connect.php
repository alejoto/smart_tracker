<?php
// connect to the MySQL server

$con = mysqli_connect("localhost","healmy5_root","laravel","healmy5_smart_tracker");
//$con = mysqli_connect("localhost","root","root","healmy5_smart_tracker");
  
  if (mysqli_connect_errno($con))
  {
  	echo "Failed to connect to MySQL: ".mysqli_connect_error();
  }
  
  $sql2="CREATE TABLE  IF NOT EXISTS hap_track_user (
			user_email			VARCHAR (50) PRIMARY KEY NOT NULL 
			,user_name			VARCHAR (50)
			,user_pass			VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
   
   
   $sql2="CREATE TABLE  IF NOT EXISTS hap_track_item (
			item_id				VARCHAR (50) PRIMARY KEY NOT NULL
			,item_name			VARCHAR (50)
   			,item_existencia	INT(50)
   			,item_fila			INT(50)
   			,item_estante		VARCHAR (50)
			,item_ubicacion		VARCHAR (50))";
   mysqli_query($con,$sql2) or die (mysqli_error($con));
 
?>
