<?php 
include("../../header.php"); 
include("modals.php"); 

$user_id = $_SESSION['user_id'];

 $stmt = $conn->prepare("SELECT * FROM  users");
 $stmt->execute(); 



?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> TODOS LOS USUARIOS</h1>
      <p></p>
     
        <button type="button" class="btn btn-default"><a href="index_admin.php" >Admins</a></li></button>   
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-adduser2">Adicionar usuario</button>
         
   
    
      </ol>
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
     <th>No.</th>
                  <th>TIPO DE USUARIO</th>
                  <th>NOMBRE</th>                                    
                  <th>USERNAME</th>  
                  <th>OPCIONES</th>
                </tr>
    <?php
    while($row = $stmt->fetch()){
    ?>
                <tr>
                 <td><?php echo $numbering;?> </td>
                  <td><?php echo $row['user_type']; ?> </td>                  
                  <td><?php echo $row['fname']; ?> &nbsp;
                  <?php echo $row['mname']; ?>  &nbsp;
                  <?php echo $row['lname']; ?> </td>
                  <td><?php echo $row['username']; ?> </td>           
              
                  <td><a href = "user-update.php?user_id=<?php echo $row['user_id']; ?>" ><i class="fa fa-edit"> Editar</i></a>                   
                    <a href = "user-delete.php?id=<?php echo $row['user_id']; ?>" ><i class="fa fa-times"> Borrar</i></a></t>
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





<?php include("../../footer.php"); ?>


