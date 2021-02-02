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
En caso de tener dudas, para mayor información consulte al numero:</p> <p>
</p> +51 - 953 740 729
<br>
<p>
Los campos con * son requeridos.
</p>

         <hr>                       

      <form id="Proovedores-form" method="POST" action="btn_functions.php">  
  <!-- fieldsets -->
  <fieldset id="DA">
    <h2 class="fs-title">DATOS PERSONALES:</h2>   
	<h4 style="text-align:left">RUC *</h4>
    <input type="text" name="RUC" class="form-control" placeholder="RUC" required/>
    <h4 style="text-align:left">Nombre Completo *</h4>
    <input type="text" name="nomape" class="form-control" placeholder="nombres y apellidos" required/>
	<h4 style="text-align:left">Direccion:</h4>
    <input type="text" class="form-control text-uppercase" name="DireccionCasa" placeholder="Lugar donde reside actualmente*" required/>
    <h4 style="text-align:left">Celular personal:</h4>
    <input type="text" class="form-control text-uppercase" name="celular" placeholder="+51-9xx xxx xxx" />  
	<h4 style="text-align:left">E-mail</h4>
    <input type="email" class="form-control text-uppercase" name="mail" placeholder="pepito@gmail.com..." />  
  </fieldset>

  <fieldset id="AC">
  <hr>
    <h2 class="fs-title">DATOS BANCARIOS:</h2> 
   <input type="text" class="form-control text-uppercase" name="NombreBanco" placeholder="Nombre de banco*" required/>	
	<input type="text" class="form-control text-uppercase" name="CtaAhorros" placeholder="Nro cuenta ahorros*" required/>
    <input type="text" class="form-control" name="CtaCorriente" placeholder="Nro. Cuenta corriente*"/>
	<input type="text"  class="form-control" name="CCI" placeholder="Nro. Cuenta Interbancario *" required/>
	<input type="text" class="form-control" name="CtaDetra" placeholder="Nro. Cuenta de Detracciones" required/>	 
  </fieldset>

  <fieldset id="AR">
  <hr>
    <h2 class="fs-title">EN CASO EMERGENCIA:</h2> 
	<h4 style="text-align:left">Datos de Contacto de Emergencia</h4>   
	<input type="text" class="form-control text-uppercase" name="CEnombre" placeholder="Nombre contacto cercano*" required/>
	<input type="text" class="form-control" name="CEcelular" placeholder="Numero Celular del contacto cercano*" required/>
	

  <fieldset id="GEN">
  <hr>
  <h4>POLITICAS GENERALES:</h4>
  <h4 style="text-align:left">Politica de Pagos</h4>
    <textarea class="form-control" name="PoliPago" placeholder="Politica de Pagos*" required></textarea>
    <h4 style="text-align:left">Observaciones/Comentarios</h4>
    <textarea class="form-control" name="obs"  required></textarea>

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