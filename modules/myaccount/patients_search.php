<? 
  if(isset($_SESSION['patient'])) unset( $_SESSION['patient'] ); 
  if(isset($_SESSION['evaluation'])) unset($_SESSION['evaluation']);
  if(isset($_SESSION['hap_patient_id'])) unset($_SESSION['hap_patient_id']);
?>

<div class="container">
  <div class="row-fluid">
    <form  class="form-horizontal span5" style="text-align: left; margin-top: 30px;" onsubmit="return false">
      <div style=" height: 250px; margin-top: 10px; margin-bottom: -30px; margin-left: 5px;">
       <center><h2 style="color: #CC0000; font-family: 'Play', sans-serif; font-weight: 700;  ">Smart Tracker</h2>
       <br>
       <img src="../../assets/images/contribucion.png" style="width:300px; height: 100px; opacity:0.7; margin-top:0px auto;">
       <br>
       <p style="color: #686868; font-family: 'Oxygen', sans-serif; font-weight: 700;">
        <!-- <i class="icon-plus"></i> <i class="icon-group icon-2x"></i>-->
        <br>
        Registro y rastreo por c&oacute;digo de barras
        <br>
      </p> 
      <!-- <div class="h3"></div> -->
    </center>
     <br>
     </div>

      <!-- ************************ -->
      <!-- select doc id section    -->
      <blockquote>
        
          <h5 class=" alert">
            Intrucciones: Seleccione el tipo de rastreo correcto y pase el esc&aacute;ner de c&oacute;digo de barras sobre el c&oacute;digo de barras del objeto.
          </h5>
        
        
        <p>Selecciona tipo de rastreo:</p>
      </blockquote><br>
      <div style="margin-left: 20px;">
        <div class="control-group" style="width: 300px;" >
          <div class="controls" style="margin-left: 0px;">
            <div id="idtypectr" class="input-prepend">
              <span class="add-on"><i class="icon-list-alt"></i></span>
              <select id="docid" >
                <option value="" >Tipo de rastreo</option>
                <option value="cc">Archivos</option>
                <option value="rc">Medicamentos</option>
                <option value="ti">Muestra Biol&oacute;gica</option>
              </select>
            </div>
          </div>
        </div>
        <div class="control-group" style="width: 300px;" >
          <label class="control-label" for="idnumber"></label>
          <div class="controls" style="margin-left: 0px;">
            <div id="idnumberctr" class="input-prepend input-append">
              <span class="add-on"><i class="icon-barcode"></i></span>
              <!--
                * button name:          idnumber
                * Triggers:             enter_search()
                * Brieff description:   Search an user by id. If exists show patient info and link to enter patient data. If not, show new patient form
                * js associated file:   patients.js
                * php AJAX:             modules/myaccount/ajax_search_patient.php
                -->
              <input type="text" id="idnumber" placeholder="C&oacute;digo de barras" maxlength="20"/>
              <button class="btn" type="button"> <i class="icon-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- End of select doc id     -->
      <!-- ************************ -->
    </form>

    <div class="span6 offset1" style="border-left: ridge; height: 560px; " >
      <!-- ************************ -->
      <!-- First time patient       -->
      <div id="enterpatient">
        <div class="page-header" style="border: none; padding-left: 70px;">
          <!-- <h2>Registrar paciente</h2> -->
        </div>
        <div class="alert alert-info fade in" style="margin-left: 30px; margin-top: -15px;">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          Ingrese un nuevo rastreo
          <h5>
            El codigo de barras ingresado no se encuentra registrado.
            Si desea registrarlo favor diligencia la informaci&oaute; requerida a continuaci&oacute;n
          </h5>
        </div>
        <div class="" style="margin-left:0px">
          
        </div>
        <form action="ajax_save_patient.php" method="post" style="padding-left: 70px; text-align: center; margin-top: 40px;">
          <input type="text" id="docidnum" name="docidnum" maxlength="20"  autocomplete="on">        
          <input type="text" id="name" name="name" placeholder="Producto" maxlength="20"><br>
          <input type="text" id="ubicacion" name="ubicacion" placeholder="Ubicaci&oacute;n" maxlength="20"><br>
      	  <input type="text" id="existencia" name="existencia" placeholder="Existencia" maxlength="20"><br>
          <input type="text" id="fila" name="fila" placeholder="Fila" maxlength="20"><br>  
          <input type="text" id="estante" name="estante" placeholder="Estante" maxlength="20"><br>
          <div class="btn-group" id="group_save_patient" >
            <!--
            * button name:          save_patient
            * Triggers:             Submit form
            * Brieff description:   Save new patient data and create firs main_eval for this patient
            * js associated file:   None
            * php AJAX:             Post: ajax_save_patient.php
            -->
            <button type="submit" class="btn btn-info " id="save_patient" style="margin-left: 0px;">
              Guardar datos del rastreo
              <i class="icon-circle-arrow-down"></i>
            </button>
            <!-- <button href="#" role="button" class="btn btn-info" style="">
             Datos adicionales 
             <i class="icon-plus-sign"></i>
           </button> -->

          </div>
            
        </form>
      </div>
      <!-- End of First time patient-->
      <!-- ************************ -->

      <!-- ************************ -->
      <!-- Found patient (if exist) -->
      <div id="patientexist" style="padding-left: 70px; text-align: left; margin-top: 35px;">
      </div>
      <!-- end of "Found patient"   -->
      <!-- ************************ -->

    </div>
    <script src="../../assets/js/medic.js"></script>
    <script src="../../assets/js/patients.js"></script>

  </div>
</div>