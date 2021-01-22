<?php 
include("../../header.php");
//include("modals.php");

?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
      <section class="content-header">
      
      <div class="callout callout-info">
        <h4>Bienvenido
             <i>   <?php echo $_SESSION['firstname']." ". $_SESSION['lastname'] ?> ! </h4>
      </div>

 


      <div class="row">
      <div class="col-md-4">
<div class="box box-warning">
                      <div class="box-header with-border">
            

      <form id="Proovedores-form">  
  <!-- fieldsets -->
  <fieldset id="DA">
    <h2 class="fs-title">Llenado de Datos Administrativos</h2>
    <hr>
    <!--<h3 class="fs-subtitle">This is step 1</h3>-->
	<br>
	<h4 style="text-align:left">RUC *</h4>
    <input type="text" name="ruc" class="form-control" placeholder="RUC" required/>
	<h4 style="text-align:left">Razon Social</h4>
    <input type="text" class="form-control" name="razonsocial" placeholder="Razon Social" />
	<h4 style="text-align:left">Nombre Comercial</h4>
    <input type="text" class="form-control" name="nom_comercial" placeholder="Nombre Comercial" />
	<h4 style="text-align:left">Direccion Fiscal</h4>
    <input type="text" class="form-control" name="dir_fiscal" placeholder="Direccion Fiscal" />
	<h4 style="text-align:left">Direccion Local</h4>
    <input type="text" class="form-control" name="dir_local" placeholder="Direccion Local" />    
  </fieldset>

  <fieldset id="AC">
  <hr>
    <h2 class="fs-title">AREA CONTABLE</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto Contable</h4>
    <input type="text" class="form-control" name="nombreAC" placeholder="Nombre" />
	<input type="email" class="form-control" name="emailAC" placeholder="Email *" required/>
	<input type="text" class="form-control" name="telfAC" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelAC" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Datos Bancarios</h4>
	<input type="text" class="form-control" name="nombanco" placeholder="Nombre de Banco" required/>
    <input type="text" class="form-control" name="nroctaahorro" placeholder="Nro. Cuenta de Ahorro"/>
	<input type="text" class="form-control" name="ctacorriente" placeholder="Nro. Cuenta Corriente" />
	<input type="text"  class="form-control" name="ctainterbancaria" placeholder="Nro. Cuenta Interbancario *" required/>
	<input type="text" class="form-control" name="ctadetracciones" placeholder="Nro. Cuenta de Detracciones" />	 
  </fieldset>

  <fieldset id="AR">
  <hr>
    <h2 class="fs-title">AREA RESERVAS</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Reservas</h4>
    <input type="text" class="form-control" name="nombreAR" placeholder="Nombre" />
	<input type="email" class="form-control" name="emailAR" placeholder="Email *" />
	<input type="text" class="form-control" name="telfAR" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelAR" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" class="form-control" name="nombreAR-e" placeholder="Nombre" />
	<input type="email" class="form-control" name="emailAR-e" placeholder="Email" />
	<input type="text" class="form-control" name="telfAR-e" placeholder="Telefono" />
	<input type="text" class="form-control" name="numcelAR-e" placeholder="Numero Celular" />
	
  </fieldset>
  <hr>
  <fieldset id="OP">    
    <h2 class="fs-title">AREA OPERACIONES</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Operaciones</h4>
    <input type="text" class="form-control" name="nombreOP" placeholder="Nombre" />
	<input type="email" class="form-control" name="emailOP" placeholder="Email" />
	<input type="text" class="form-control" name="telfOP" placeholder="Telefono" />
  <input type="text" class="form-control" name="numcelOP" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" class="form-control" name="nombreOP-e" placeholder="Nombre" />
	<input type="email" class="form-control" name="emailOP-e" placeholder="Email" />
	<input type="text" class="form-control" name="telfOP-e" placeholder="Telefono" />
	<input type="text" class="form-control" name="numcelOP-e" placeholder="Numero Celular" />
	
  </fieldset>
  <fieldset id="GEN">
  <hr>
  <h2>POLITICAS GENERALES</h2>
    <h4 style="text-align:left">Reservaciones Individuales</h4>	
    <textarea name="reservas_individuales" class="form-control" placeholder="Reservaciones Individuales"></textarea>
	<h4 style="text-align:left">Reservaciones Grupos</h4>
    <textarea name="reservas_grupos" class="form-control" placeholder="Reservaciones Grupos"></textarea>
    <h4 style="text-align:left">Politicas de Niños</h4>
    <textarea name="politicas_ninhos" class="form-control" placeholder="Politicas de niños"></textarea>
	<h4 style="text-align:left">Politicas Generales</h4>
    <textarea name="politicas_generales" class="form-control" placeholder="Politicas Generales"></textarea>
	<h4 style="text-align:left">Check In/ Check Out / Day Use</h4>
    <textarea name="cheks" class="form-control" placeholder="Check In/ Check Out / Day Use"></textarea>
	<h4 style="text-align:left">Politicas de Liberados</h4>
    <textarea class="form-control" name="politicas_liberados" placeholder="Politicas de Liberados"></textarea>
    <h4 style="text-align:left">Anulaciones & No Shows</h4>
    <textarea class="form-control" name="anulaciones" placeholder="Anulaciones & No Shows"></textarea>
	<h4 style="text-align:left">Politica de Pagos</h4>
    <textarea class="form-control" name="politicas_pagos" placeholder="Politica de Pagos"></textarea>
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