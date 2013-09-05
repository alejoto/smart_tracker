<?php
  session_start();
  include '../DB/connect.php';
  $doc  = $_POST['doc'];
  $sql    = "SELECT * FROM hap_track_item WHERE item_id='".$doc."'";
  $result = mysqli_query($con,$sql);
  $row    = mysqli_fetch_array($result);
  
  if ($row[0] !="" || $row[0] !=null){ 
    ?>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="row alert alert-info">
      <br/>
      <div class="span1">
          <i class=" icon-barcode"></i>   
      </div>
      <div class="span8">
        <div class="row">
          <div class="offset1 span10">
            <h4>
              Nombre: <?php echo $row['item_name'] ?>
            </h4>
          </div>
        </div>
       </div>
       <div class="row">
        <div class="offset1 span11">
          <hr/>
        </div>
      </div>
        <div class="row">
          <div class="offset1 span10">
          	<b>N&uacute;mero de existencia: </b><?php echo $row['item_existencia'];?>
          </div>
        </div>
     
      <div class="row">
        <div class="offset1 span11">
          <hr/>
        </div>
      </div>
      <div class="row">
       <div class="offset1 span10">
          <b> Ubicaci&oacute;n: </b> <?php echo $row['item_ubicacion'];?> 
        </div>
       </div>
       <div class="row">
        <div class="offset1 span11">
          <hr/>
        </div>
      </div>
       <div class="row">
        <div class="offset1 span10">
          <b>Fila n&uacute;mero:</b> <?php echo $row['item_fila'];?>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="offset1 span10">
          <b>Estante: </b><?php echo $row['item_estante'];?>
        </div>
      </div>      
    </div>
    <?php
  }else echo 'no';
  mysqli_close($con);
?>