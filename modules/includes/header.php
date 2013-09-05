<!DOCTYPE html>
<html>
<head>
  <title>Smart Tracker</title>
  <link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../../assets/stylesheets/neumo.css" rel="stylesheet" media="screen">
  <link rel="icon"   type="image/png"  href="../../assets/images/favicon.ico">
  <link rel="stylesheet" href="../../assets/fonts/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

  <script src="../../assets/js/jquery.min.js"></script>

  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/bootstrap-carousel.js"></script>
  <!-- <script src="../../assets/js/bootstrap-modal.js"></script>  -->
  <script src="../../assets/js/medic.js"></script>
  <script src="../../assets/js/highcharts.js"></script>


</head>
<body>
  <?php 
    include '../DB/connect.php';
    $user_id=$_SESSION['username'];
    $result_user = mysqli_query($con,"SELECT * FROM hap_track_user WHERE user_email='$user_id'"  );  
    $row_user    = mysqli_fetch_array($result_user);
  ?>
<!--menu starts here-->
<div style="background:#3A3A3A;color:#fff;padding:10px;">
  <div class="row-fluid">
    <div class="span3">
      <p style="color: #C6C6AA; font-family: 'Play', cursive; font-weight: 700; font-size:120%;">
        Smart Tracker        
      </p>
    </div>
    <div class="span6">
      <div class="btn-group">
     
    <a href="../login/logout.php" class="btn btn-inverse">Salir<i class="icon-share-alt icon-white"></i></a>
  </div>
</div>   

<div class="span3" style="color:gray;padding-top:7px">        
  <a href="#" style="color:gray"  data-toggle="tooltip" title="Nombre del usuario" data-placement="bottom" >
    <?php echo $row_user['user_name']; ?>
  </a>
</div>
</div>
</div>

<!--menu ending-->

<!-- This is the menu for the help-->

