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
    <h2 class="fs-title">Llene los Datos Administrativos</h2>
    <!--<h3 class="fs-subtitle">This is step 1</h3>-->
	<br>
	<h4 style="text-align:left">RUC *</h4>
    <input type="text" name="ruc" placeholder="RUC" required/>
	<h4 style="text-align:left">Razon Social</h4>
    <input type="text" name="razonsocial" placeholder="Razon Social" />
	<h4 style="text-align:left">Nombre Comercial</h4>
    <input type="text" name="nom_comercial" placeholder="Nombre Comercial" />
	<h4 style="text-align:left">Direccion Fiscal</h4>
    <input type="text" name="dir_fiscal" placeholder="Direccion Fiscal" />
	<h4 style="text-align:left">Direccion Local</h4>
    <input type="text" name="dir_local" placeholder="Direccion Local" />    
  </fieldset>

  <fieldset id="AC">
    <h2 class="fs-title">AREA CONTABLE</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto Contable</h4>
    <input type="text" name="nombreAC" placeholder="Nombre" />
	<input type="email" name="emailAC" placeholder="Email *" required/>
	<input type="text" name="telfAC" placeholder="Telefono" />
  <input type="text" name="numcelAC" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Datos Bancarios</h4>
	<input type="text" name="nombanco" placeholder="Nombre de Banco" required/>
    <input type="text" name="nroctaahorro" placeholder="Nro. Cuenta de Ahorro"/>
	<input type="text" name="ctacorriente" placeholder="Nro. Cuenta Corriente" />
	<input type="text" name="ctainterbancaria" placeholder="Nro. Cuenta Interbancario *" required/>
	<input type="text" name="ctadetracciones" placeholder="Nro. Cuenta de Detracciones" />	 
  </fieldset>

  <fieldset id="AR">
    <h2 class="fs-title">AREA RESERVAS</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Reservas</h4>
    <input type="text" name="nombreAR" placeholder="Nombre" />
	<input type="email" name="emailAR" placeholder="Email *" />
	<input type="text" name="telfAR" placeholder="Telefono" />
  <input type="text" name="numcelAR" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" name="nombreAR-e" placeholder="Nombre" />
	<input type="email" name="emailAR-e" placeholder="Email" />
	<input type="text" name="telfAR-e" placeholder="Telefono" />
	<input type="text" name="numcelAR-e" placeholder="Numero Celular" />
	
  </fieldset>
  <fieldset id="OP">
    <h2 class="fs-title">AREA OPERACIONES</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Operaciones</h4>
    <input type="text" name="nombreOP" placeholder="Nombre" />
	<input type="email" name="emailOP" placeholder="Email" />
	<input type="text" name="telfOP" placeholder="Telefono" />
  <input type="text" name="numcelOP" placeholder="Numero Celular" />
  
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" name="nombreOP-e" placeholder="Nombre" />
	<input type="email" name="emailOP-e" placeholder="Email" />
	<input type="text" name="telfOP-e" placeholder="Telefono" />
	<input type="text" name="numcelOP-e" placeholder="Numero Celular" />
	
  </fieldset>
  <fieldset id="GEN">
    <h4 style="text-align:left">Reservaciones Individuales</h4>	
    <textarea name="reservas_individuales" placeholder="Reservaciones Individuales"></textarea>
	<h4 style="text-align:left">Reservaciones Grupos</h4>
    <textarea name="reservas_grupos" placeholder="Reservaciones Grupos"></textarea>
    <h4 style="text-align:left">Politicas de Niños</h4>
    <textarea name="politicas_ninhos" placeholder="Politicas de niños"></textarea>
	<h4 style="text-align:left">Politicas Generales</h4>
    <textarea name="politicas_generales" placeholder="Politicas Generales"></textarea>
	<h4 style="text-align:left">Check In/ Check Out / Day Use</h4>
    <textarea name="cheks" placeholder="Check In/ Check Out / Day Use"></textarea>
	<h4 style="text-align:left">Politicas de Liberados</h4>
    <textarea name="politicas_liberados" placeholder="Politicas de Liberados"></textarea>
    <h4 style="text-align:left">Anulaciones & No Shows</h4>
    <textarea name="anulaciones" placeholder="Anulaciones & No Shows"></textarea>
	<h4 style="text-align:left">Politica de Pagos</h4>
    <textarea name="politicas_pagos" placeholder="Politica de Pagos"></textarea>
	
    <input type="submit" name="submit" class="submit action-button" value="Enviar" />
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
          </div>
          <!-- /.box -->
        </div>






<?php include("../../footer.php"); ?>