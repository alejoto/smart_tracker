<?php
ob_start();
session_start();
include '../DB/connect.php';


/*First redirect: if $page not set, redirecto to patients*/
if (isset($_GET["page"])) {$page = $_GET["page"];}
else {header('Location: myaccount.php?page=patients');}


$user_id=$_SESSION['username'];
/*
* $_SESSION['username'] starts:        login/ajax_login.php
*/



//load pages according to $page value
 if(isset($_SESSION['username'])){
  
  include '../includes/header.php';
  
  if($page == "user_register") include 'user_register.php';
  else if($page == "patients") include 'patients_search.php';

  else if($page == "edit" ) include '../patient/edit.php';
  else if($page == "tables" ) include '../tables/index.php';
  else include 'patients_search.php';
  include '../includes/footer.php';
}else{ 
  header('Location: ../../index.php'); 
}
?>
