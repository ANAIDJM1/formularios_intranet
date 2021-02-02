<?php 
include("../../header.php");
//include("modals.php");

?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
      <section class="content-header">
      
      <div class="callout callout-info" id="aviso">
        <h4>Bienvenido
             <i>   <?php echo $_SESSION['firstname']." ". $_SESSION['lastname'] ?> ! </h4>
      </div>

 


      <div class="row">
      <div class="col-md-4">
<div class="box box-warning">
                      <div class="box-header with-border">

                      <?php
                      $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                      if(strpos($url,"envio=success")== true)
                      {
                          echo "<div class='alert alert-success alert-dismissible' style='color:white;'>
                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true' >X</button>
                          <p>
                          <strong>Bien!, </strong>
                          Su registro se completo con exito!
                          </p> </div>";
                          //exit();
                      }
                      elseif(strpos($url,"envio=error")== true)
                      {
                        echo "<div class='alert alert-danger alert-dismissible'>
                          <button type='button' class='close' data-dismiss='alert' aria-hidden='true' >X</button>
                          <p>
                          <strong>Error!, </strong>
                          Su registro no pudo ser guardado....
                          </p> </div>";

                      }

                      ?>

                      

                      <h3>Indicaciones</h3>
<p>
En caso de las politicas generales, escribir "NO TENGO", en caso no contemple o desconozca dicha
informacion, para mayor información consulte al numero:</p> <p>
</p> +51 - 953 740 729
<br>
<p>
Los campos con * son requeridos.
</p>

         <hr>                       

      <form id="Proovedores-form" method="POST" action="btn_functions.php">  
  <!-- fieldsets -->
  <fieldset id="DA">
    <h2 class="fs-title">Llenado de Datos Administrativos</h2>
    <hr>
    <!--<h3 class="fs-subtitle">This is step 1</h3>-->
	<br>
	<h4 style="text-align:left">RUC *</h4>
    <input type="text" name="ruc" class="form-control" placeholder="RUC" required/>
	<h4 style="text-align:left">Razon Social</h4>
    <input type="text" class="form-control text-uppercase" name="razonsocial" placeholder="Razon Social *" required/>
	<h4 style="text-align:left">Nombre Comercial</h4>
    <input type="text" class="form-control text-uppercase" name="nom_comercial" placeholder="Nombre Comercial*" required/>
	<h4 style="text-align:left">Direccion Fiscal</h4>
    <input type="text" class="form-control text-uppercase" name="dir_fiscal" placeholder="Direccion Fiscal*" required/>
	<h4 style="text-align:left">Direccion Local</h4>
    <input type="text" class="form-control text-uppercase" name="dir_local" placeholder="Direccion Local*" required />    
   <h4>Pagina Web</h4> 
   <input type="text" class="form-control" name="web" placeholder="Pagina web o URL" /> 
  </fieldset>

  <fieldset id="AC">
  <hr>
    <h2 class="fs-title">AREA CONTABLE</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto Contable</h4>
    <input type="text" class="form-control text-uppercase" name="nombreAC" placeholder="Nombre*" required/>
	<input type="email" class="form-control" name="emailAC" placeholder="Email *" required/>
	<input type="text" class="form-control" name="telfAC" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelAC" placeholder="Numero Celular*" required/>
  
	<h4 style="text-align:left">Datos Bancarios</h4>
	<input type="text" class="form-control text-uppercase" name="nombanco" placeholder="Nombre de Banco*" required/>
    <input type="text" class="form-control" name="nroctaahorro" placeholder="Nro. Cuenta de Ahorro*" required/>
	<input type="text" class="form-control" name="ctacorriente" placeholder="Nro. Cuenta Corriente*" required/>
	<input type="text"  class="form-control" name="ctainterbancaria" placeholder="Nro. Cuenta Interbancario *" required/>
	<input type="text" class="form-control" name="ctadetracciones" placeholder="Nro. Cuenta de Detracciones" required/>	 
  </fieldset>

  <fieldset id="AR">
  <hr>
    <h2 class="fs-title">AREA RESERVAS</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Reservas</h4>
    <input type="text" class="form-control text-uppercase" name="nombreAR" placeholder="Nombre*" required/>
	<input type="email" class="form-control" name="emailAR" placeholder="Email *" required/>
	<input type="text" class="form-control" name="telfAR" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelAR" placeholder="Numero Celular*" required/>
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" class="form-control text-uppercase" name="nombreAR_e" placeholder="Nombre*" required/>
	<input type="email" class="form-control" name="emailAR_e" placeholder="Email*" required/>
	<input type="text" class="form-control" name="telfAR_e" placeholder="Telefono" />
	<input type="text" class="form-control" name="numcelAR_e" placeholder="Numero Celular*" required/>
	
  </fieldset>
  <hr>
  <fieldset id="OP">    
    <h2 class="fs-title">AREA OPERACIONES</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Operaciones</h4>
    <input type="text" class="form-control text-uppercase" name="nombreOP" placeholder="Nombre*" required/>
	<input type="email" class="form-control" name="emailOP" placeholder="Email*" required/>
	<input type="text" class="form-control" name="telfOP" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelOP" placeholder="Numero Celular*" required/>
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" class="form-control text-uppercase" name="nombreOP_e" placeholder="Nombre*" required/>
	<input type="email" class="form-control" name="emailOP_e" placeholder="Email*" required/>
	<input type="text" class="form-control" name="telfOP_e" placeholder="Telefono" />
	<input type="text" class="form-control" name="numcelOP_e" placeholder="Numero Celular*" required/>
	
  </fieldset>
  <fieldset id="GEN">
  <hr>
  <h2>POLITICAS GENERALES</h2>
    <h4 style="text-align:left">Reservaciones Individuales</h4>	
    <textarea name="reservas_individuales" class="form-control" placeholder="Reservaciones Individuales*" required></textarea>
	<h4 style="text-align:left">Reservaciones Grupos</h4>
    <textarea name="reservas_grupos" class="form-control" placeholder="Reservaciones Grupos*" required></textarea>
    <h4 style="text-align:left">Politicas de Niños</h4>
    <textarea name="politicas_ninhos" class="form-control" placeholder="Politicas de niños*" required></textarea>
	<h4 style="text-align:left">Politicas Generales</h4>
    <textarea name="politicas_generales" class="form-control" placeholder="Politicas Generales*" required></textarea>
	<h4 style="text-align:left">Check In/ Check Out / Day Use</h4>
    <textarea name="cheks" class="form-control" placeholder="Check In/ Check Out / Day Use*" required></textarea>
	<h4 style="text-align:left">Politicas de Liberados</h4>
    <textarea class="form-control" name="politicas_liberados" placeholder="Politicas de Liberados*" required></textarea>
    <h4 style="text-align:left">Anulaciones & No Shows</h4>
    <textarea class="form-control" name="anulaciones" placeholder="Anulaciones & No Shows*" required></textarea>
	<h4 style="text-align:left">Politica de Pagos</h4>
    <textarea class="form-control" name="politicas_pagos" placeholder="Politica de Pagos*" required></textarea>
	<br>
    <button type="submit" name="submit" class="submit btn btn-info btn-block" >ENVIAR</button>
  </fieldset>
</form>

<!-- /body -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
            </div>
            <!-- /.box-body -->        

<?php include("../../footer.php"); ?>