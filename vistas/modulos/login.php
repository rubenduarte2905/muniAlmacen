<div id="back"></div>
<div class="login-box" >
  <div class="login-logo" >
   <img src="vistas/img/plantilla/munitrelew.png" width="360" height="100" alt="">
  </div>

  <!-- /.login-logo -->
  
  <div class="login-box-body">
  
     <p class="login-box-msg">Incio de sesión</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nombre de usuario" name="ingUsuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
            <!-- /.col -->
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-dark btn-block btn-flat">Iniciar</button>
        </div>
      </div>  
        
      <?php 
      
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();
      
      ?>

    </form>

      </div>

  </div>
