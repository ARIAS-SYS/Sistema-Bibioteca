<?php

include('../app/config/config.php');
include('../app/config/conexion.php');

session_start();

if(isset($_SESSION['sesion_email'])){

}else{
    echo "no existe session";
    header('Location: '.$URL.'/login');
}




include('../layout/admin/parte1.php');
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BIENVENIDO</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Nombres</th>
                            <td><?php echo $sesion_nombres; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Apellidos</th>
                            <td><?php echo $sesion_apellidos; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CI</th>
                            <td><?php echo $sesion_ci; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Celular</th>
                            <td><?php echo $sesion_celular; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Cargo</th>
                            <td><?php echo $sesion_cargo; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><?php echo $email_sesion; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('../layout/admin/parte2.php');
?>
  
