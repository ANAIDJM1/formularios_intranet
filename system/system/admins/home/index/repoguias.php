<?php 
include("../../header.php");
include("../../manage/users/modals.php"); 

$user_id = $_SESSION['user_id'];

 $stmt2 = $conn->prepare("SELECT * FROM  personalcampo");
 $stmt2->execute(); 


?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->  
      <section class="content-header">
      
      <div class="callout callout-info">
        <h4>REPORTE PERSONAL DE CAMPO</h4>
      </div> 

<div class="box box-warning">
  <div class="box-header with-border">


  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> TODOS LOS GUIAS / COCINEROS</h1>     
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
                  <th>NOMBRE COMPLETO</th>
                  <th>CELULAR</th>                                    
                  <th>EMAIL</th>                 
                </tr>
    <?php
    while($row = $stmt2->fetch()){
    ?>
                <tr>
                 <td><?php echo $numbering;?> </td>
                  <td><?php echo $row['RUC']; ?> </td>                  
                  <td><?php echo $row['nomape']; ?> &nbsp;
                  <?php echo $row['celular']; ?>  &nbsp;
                  <?php echo $row['mail']; ?> </td>                      
              
                  <td><a href = "pc-update.php?pc_id=<?php echo $row['RUC']; ?>" ><i class="fa fa-edit"> Editar</i></a>                   
                    <a href = "pc-delete.php?pc_id=<?php echo $row['RUC']; ?>" ><i class="fa fa-times"> Borrar</i></a></t>
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