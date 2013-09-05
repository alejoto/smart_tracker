<?php
  ob_start();
  session_start();
  include '../DB/connect.php';
  $docidnum = $_POST['docidnum'];
  $name = $_POST['name'];
  $existencia = $_POST['existencia'];
  $ubicacion = $_POST['ubicacion'];
  $fila = $_POST['fila'];
  $estante = $_POST['estante'];

  $actual_date = date('Y-m-d', time());
    
  if( !$existencia || !$name || !$fila || !$ubicacion || !$estante){
    header('Location: ../myaccount/myaccount.php?page=patients'); 
  }else{
    mysqli_query($con,"INSERT INTO hap_track_item (
      item_id, item_name, item_existencia, item_fila, item_estante, item_ubicacion) 
      VALUES ('".$docidnum."', '".$name."', '".$existencia."', '".$fila."', '".$estante."', '".$ubicacion."')");
    header('Location: ../myaccount/myaccount.php?page=basic');     
  }
?>