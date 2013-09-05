<?php
  session_start();
  include '../DB/connect.php';
  $usr 	 	= htmlspecialchars($_POST['usr'],ENT_QUOTES);
  $pwd2 	= $_POST['pwd'];
  $pwd		= $pwd2;
  $sql    	= "SELECT * FROM hap_track_user WHERE user_email='$usr' ";
  $result 	= mysqli_query($con,$sql);
  $row    	= mysqli_fetch_array($result);
  echo mysqli_error($con);

  if( $row[0] !="" || $row[0] !=null ) {
    if( $pwd == $row['user_pass'] ){
      $_SESSION['username'] = $usr;
      echo "yes";
    }else echo "no";
  }else echo "no";

  mysqli_close($con);
?>