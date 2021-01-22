
<!-- admin -->

  <div class="modal fade" id="modal-adduser">
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="btn_functions.php" method="POST">
  <div class="modal-header"> </div>
  <div class="modal-body">

<div class="col-md-12">
              <div class="form-group">
                <label>Tipo de usuario:</label>
                <select class="form-control select2" name="usertype_id" style="width: 100%;">               
                  <option value="2">Admin</option>
                </select>
              </div>
</div>
<div class="col-md-12">
              <div class="form-group">
                <label>Nombre:</label>
                  <input type="text" name="firstname" class="form-control" style="width: 100%;" placeholder="Enter firstname" required>
              </div>
</div>

<div class="col-md-12">
              <div class="form-group">
                <label>Apellido Paterno</label>
                  <input type="text" name="middlename" class="form-control" style="width: 100%;" placeholder="Enter middlename">
              </div>
</div>

<div class="col-md-12">
              <div class="form-group">
                <label>Apellido Materno</label>
                  <input type="text" name="lastname" class="form-control" style="width: 100%;" placeholder="Enter lastname" required>
              </div>

</div>


<div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                  <input type="text" name="username" class="form-control" style="width: 100%;" placeholder="Enter username" required>
              </div>
</div>

<div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                  <input type="text" name="password" class="form-control" style="width: 100%;" placeholder="Enter password" required>
              </div>
</div>
<div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" name="btnAddUser" value="Save user" class="btn btn-success pull-right">
</div>

  </div>
  </div>
  </form>
  </div>
  </div>
       
<!--==============================================USUARIO COMUN==================================================-->

<!-- admin -->

<div class="modal fade" id="modal-adduser2">
  <div class="modal-dialog">
  <div class="modal-content">
  <form action="btn_functions.php" method="POST">
  <div class="modal-header"> </div>
  <div class="modal-body">

<div class="col-md-12">
              <div class="form-group">
                <label>Tipo de usuario:</label>
                <select class="form-control select2" name="usertype_id" style="width: 100%;">               
                  <option value="1">Proveedor</option>
                  <option value="2">Admin</option>
                  <option value="3">Personal de campo/Guia</option>
                </select>
              </div>
</div>
<div class="col-md-12">
              <div class="form-group">
                <label>Nombre:</label>
                  <input type="text" name="firstname" class="form-control" style="width: 100%;" placeholder="Enter firstname" required>
              </div>
</div>

<div class="col-md-12">
              <div class="form-group">
                <label>Apellido Paterno</label>
                  <input type="text" name="middlename" class="form-control" style="width: 100%;" placeholder="Enter middlename">
              </div>
</div>

<div class="col-md-12">
              <div class="form-group">
                <label>Apellido Materno</label>
                  <input type="text" name="lastname" class="form-control" style="width: 100%;" placeholder="Enter lastname" required>
              </div>

</div>


<div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                  <input type="text" name="username" class="form-control" style="width: 100%;" placeholder="Enter username" required>
              </div>
</div>

<div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                  <input type="text" name="password" class="form-control" style="width: 100%;" placeholder="Enter password" required>
              </div>
</div>
<div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" name="btnAddUser" value="Save user" class="btn btn-success pull-right">
</div>

  </div>
  </div>
  </form>
  </div>
  </div>
       

