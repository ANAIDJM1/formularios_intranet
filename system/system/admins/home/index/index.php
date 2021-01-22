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

<div class="box box-warning">
  <div class="box-header with-border">

  <div id="contenido0"></div>  
  </div>
</div>   

<?php include("../../footer.php"); ?>