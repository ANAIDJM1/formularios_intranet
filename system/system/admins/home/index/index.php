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

 




    <!--    <small>Blank example to the fixed layout</small> -->


    <!-- Main content -->

            

            



      <div class="row">
      <div class="col-md-4">
<div class="box box-warning">
                      <div class="box-header with-border">
            

      <form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Datos Administrativos</li>
    <li>Area Contable</li>
    <li>Area de Reservas</li>
	<li>Area de Operaciones</li>
	<li>Politicas Generales</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Datos Administrativos</h2>
    <!--<h3 class="fs-subtitle">This is step 1</h3>-->
	<br>
	<h4 style="text-align:left">RUC</h4>
    <input type="text" name="email" placeholder="RUC" />
	<h4 style="text-align:left">Razon Social</h4>
    <input type="text" name="RUC" placeholder="Razon Social" />
	<h4 style="text-align:left">Nombre Comercial</h4>
    <input type="text" name="nom_comercial" placeholder="Nombre Comercial" />
	<h4 style="text-align:left">Direccion Fiscal</h4>
    <input type="text" name="dir_fiscal" placeholder="Direccion Fiscal" />
	<h4 style="text-align:left">Direccion Local</h4>
    <input type="text" name="dir_local" placeholder="Direccion Local" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">AREA CONTABLE</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto Contable</h4>
    <input type="text" name="twitter" placeholder="Nombre" />
	<input type="text" name="twitter" placeholder="Email" />
	<input type="text" name="twitter" placeholder="Telefono" />
	<input type="text" name="twitter" placeholder="Numero Celular" />
	<h4 style="text-align:left">Datos Bancarios</h4>
	<input type="text" name="twitter" placeholder="Nombre de Banco" />
    <input type="text" name="twitter" placeholder="Nro. Cuenta de Ahorro" />
	<input type="text" name="twitter" placeholder="Nro. Cuenta Corriente" />
	<input type="text" name="twitter" placeholder="Nro. Cuenta Interbancario" />
	<input type="text" name="twitter" placeholder="Nro. Cuenta de Detracciones" />	
    <input type="button" name="previous" class="previous action-button" value="Previo" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">AREA RESERVAS</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Reservas</h4>
    <input type="text" name="twitter" placeholder="Nombre" />
	<input type="text" name="twitter" placeholder="Email" />
	<input type="text" name="twitter" placeholder="Telefono" />
	<input type="text" name="twitter" placeholder="Numero Celular" />
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" name="twitter" placeholder="Nombre" />
	<input type="text" name="twitter" placeholder="Email" />
	<input type="text" name="twitter" placeholder="Telefono" />
	<input type="text" name="twitter" placeholder="Numero Celular" />
	
    <input type="button" name="previous" class="previous action-button" value="Previo" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">AREA OPERACIONES</h2>
    <!--<h3 class="fs-subtitle">Your presence on the social network</h3>-->
	<h4 style="text-align:left">Datos de Contacto de Operaciones</h4>
    <input type="text" name="twitter" placeholder="Nombre" />
	<input type="text" name="twitter" placeholder="Email" />
	<input type="text" name="twitter" placeholder="Telefono" />
	<input type="text" name="twitter" placeholder="Numero Celular" />
	<h4 style="text-align:left">Contacto de Emergencia</h4>
	<input type="text" name="twitter" placeholder="Nombre" />
	<input type="text" name="twitter" placeholder="Email" />
	<input type="text" name="twitter" placeholder="Telefono" />
	<input type="text" name="twitter" placeholder="Numero Celular" />
	
    <input type="button" name="previous" class="previous action-button" value="Previo" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h4 style="text-align:left">Reservaciones Individuales</h4>	
    <textarea name="address" placeholder="Reservaciones Individuales"></textarea>
	<h4 style="text-align:left">Reservaciones Grupos</h4>
    <textarea name="address" placeholder="Reservaciones Grupos"></textarea>
    <h4 style="text-align:left">Politicas de Niños</h4>
    <textarea name="address" placeholder="Politicas de niños"></textarea>
	<h4 style="text-align:left">Politicas Generales</h4>
    <textarea name="address" placeholder="Politicas Generales"></textarea>
	<h4 style="text-align:left">Check In/ Check Out / Day Use</h4>
    <textarea name="address" placeholder="Check In/ Check Out / Day Use"></textarea>
	<h4 style="text-align:left">Politicas de Liberados</h4>
    <textarea name="address" placeholder="Politicas de Liberados"></textarea>
    <h4 style="text-align:left">Anulaciones & No Shows</h4>
    <textarea name="address" placeholder="Anulaciones & No Shows"></textarea>
	<h4 style="text-align:left">Politica de Pagos</h4>
    <textarea name="address" placeholder="Politica de Pagos"></textarea>
	
    <input type="button" name="previous" class="previous action-button" value="Previo" />
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