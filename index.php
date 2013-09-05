<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Smart Tracker</title>

    <!--CSS Stylysheets start-->
    <link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/stylesheets/neumo.css" rel="stylesheet" media="screen">
    <link rel="icon"   type="image/png"  href="assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/stylesheets/bootstrap-responsive.css" rel="stylesheet">
    <!--CSS Stylysheets ends-->

    <!-- Fonts Start -->
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css">
    <!-- Fonts Ends -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  
  <body style="background-image:url('assets/images/debut_light.png');background-repeat:repeat;">
   <div class="container" style="height: auto;">
      <br><br>
      <div class="row-fluid">
        
        <div class="span8" style="margin-top: -18px; text-align: left; padding-left: 50px;">
          <h2 style="color: #5C5C64; font-family: 'Play', cursive;">
            Smart Tracker 
          </h2>
        </div>
        
        <div class="span4">
          
          
          <?php
         
            if(isset($_SESSION['username'])){ 
              echo '<a href="modules/myaccount/myaccount.php?page=patients"><u>'
                    .$_SESSION['username'].
                    '</u></a>';
              echo '<a href="modules/login/logout.php" role="button" class="btn btn-danger left_space">Salir</a>';
            }else{ ?>
            <!--
            * button name:          button_modal
            * Triggers:             jquery open modal box
            * Brieff description:   Open modal box with login form
            * js associated file:   
            * php AJAX:             no file, embeded html from modules/login/login.php
            -->
            <a href="#modal_login" id="button_modal" role="button" style="font-family:'Oxygen',sans-serif;" data-toggle="modal"><b style="font-family: 'Oxygen', sans-serif;">Entrar </b></a>
            <!--
            * button name:          
            * Triggers:             jquery open modal box
            * Brieff description:   Open modal box with register form
            * js associated file:   
            * php AJAX:             no file, embeded html from modules/register/register.php
            -->
            <?php  }
    		//include 'modules/includes/help.php';
            include 'modules/login/login.php';
            //include 'modules/register/register.php';
          ?>
        
        </div>
      </div>
    </div>  
 

    <!--// START Imagenes Carousel-->
     <div class="row-fluid" style="margin-top: 20px;">
      <div class="span12" style="margin: 0px auto;">
       <div id="banner">
          <?php include 'modules/includes/carousel.html'; ?>
       </div>
      </div>
     </div>
    <!--// END Imagenes Jquery-->

        
    <div class="container" style="height: auto; margin-top: 30px;text-align: left;" >
      <div class="span1"></div>
      <div class="row-fluid" style="margin-top: 40px; margin-top: 0px;">
        <div class="span7 alert" style="background: none; color: gray; border: none; height: 330px;">
          <p style="color: #4A4C4C;text-align: center; font-family: 'Oxygen', sans-serif; font-weight: 700; font-size:150%; margin-top: 30px;">F&aacute;cil rastreo de muestras y documentos</p><br>
          <br>
          <i style="text-align: center;">Rastreo digital de documentos f&iacute;sicos y muestras biol&oacute;gicas.</i><br><br>
          <div  style="font-size:1rpx;font-family: 'Open Sans', sans-serif;">Maneje el archivo de documentaci&oacute;n y muestras cl&iacute;nicas de forma f&aacute;cil, r&aacute;pida y segura. 
          Gane tiempo localizando y almacenando &aacute;gilmente la informaci&oacute;n y muestras de sus pacientes.</div>
           <br><br>
        </div>

        <div class="span4 alert" style="background: none; color: gray; border: none;">
          <p style="color: #4A4C4C;text-align: center; font-family: 'Oxygen', sans-serif; font-weight: 700; font-size:150%; margin-top: 30px;">Caracter&iacute;sticas</p><br>
          <div  style="font-size:14px;font-family: 'Open Sans', sans-serif; height: 80px;">
          <ul>
          	<li>Marcación con código de barras.</li>
			<li>Automatizacion de archivo físico.</li>
			<li>Inventario de muestras biológicas.</li>
			<li>Rastreo desde plataforma web.</li>
          </ul>
          </div>
           <br><br>
        </div>

      </div>
      <!--Footer-->
      <hr>
      <div   id="footer_index" class="row-fluid" style="margin-top: 0px; padding-left: 25px;">
        <div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;"><a href="http://www.healmydisease.com/04Spanish/02HMDdescription.php" target="_blank">Acerca de HMD</a></div>
        <div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;"><a href="#myModal" data-toggle="modal" data-target="#myModal"> Pol&iacute;tica de privacidad</a></div>
        <div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;"><a href="http://www.healmydisease.com/04Spanish/02sendinfo.php" target="_blank">Conctacto</a></div>
        <br>

    <!-- Start Privacy Policy -->
    <?php include 'modules/includes/privacy.php';?> 
    <!--End privacy Policy -->

        <br>
       <div class="row-fluid" style="margin-top: 0px;">
         <div class="span6" style="margin-top: 0px;">
         </div>
          <div class="span6" style="margin-top: 0px;">
            <a href="http://www.healmydisease.com" target="_blank" style="font-family: 'Oxygen', sans-serif; color: #4A4C4C;">
            <br>Heal My Disease &copy; 2013 - Medell&iacute;n - Colombia      <img src="assets/images/hmdlogo.png" style="weight: 56px; height: 29px; opacity: 0.7; margin-top: 0px auto;">
          </a>
          <br>
          </div>    
        </div>
      </div>
    </div>
  </body>
</html>
