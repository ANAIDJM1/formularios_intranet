<?php 
include("../../header.php");
include("../../manage/users/modals.php"); 

$user_id = $_SESSION['user_id'];

 $stmt2 = $conn->prepare("SELECT * FROM  proveedores");
 $stmt2->execute(); 


?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
      <section class="content-header">
      
      <div class="callout callout-info">
        <h4>REPORTE PROVEEDORES</h4>
      </div> 

<div class="box box-warning">
  <div class="box-header with-border">


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> TODOS LOS PROVEEDORES</h1>     
    </section>

  <section class="content">
    <!-- Main content -->
          <div class="box">
            <div class="box-header">                
            </div>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">              
                <tr>
                  

<?php 
$c = 0;
$numbering = 1;

?>
                    <th>Nro</th>
                    <th>RUC</th>
                  <th>NOMBRE COMERCIAL</th>
                  <th>CEL. AREA CONTABLE</th>                                    
                  <th>EMAIL AREA CONTABLE</th>  
                  <th>WEB</th>
                </tr>
    <?php
    while($row = $stmt2->fetch()){
    ?>
                <tr>
                 <td><?php echo $numbering;?> </td>
                  <td><?php echo $row['RUC']; ?> </td>                  
                  <td><?php echo $row['Nombre Comercial']; ?> &nbsp;
                  <?php echo $row['AC_celular']; ?>  &nbsp;
                  <?php echo $row['AC_email']; ?> </td>
                  <td><?php echo $row['web']; ?> </td>           
              
                  <td><a href = "prove-update.php?prove_id=<?php echo $row['RUC']; ?>" ><i class="fa fa-edit"> Editar</i></a>                   
                    <a href = "prove-delete.php?prove_id=<?php echo $row['RUC']; ?>" ><i class="fa fa-times"> Borrar</i></a></t>
                </tr>

                <?php 
$numbering++;?>

    <?php
    }
    ?>


              </table>
            </div>
            <!-- /.box-body -->
             <div class="box-footer">
           
            </div>
          </div>
          <!-- /.box -->

      
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
















  </div>
</div>   

<?php include("../../footer.php"); ?>