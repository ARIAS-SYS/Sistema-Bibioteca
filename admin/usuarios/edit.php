
<?php

include('../../app/config/config.php');
include('../../app/config/conexion.php');


include('../../layout/admin/sesion.php');


include('../../layout/admin/parte1.php');
?>

<?php

$id=$_GET['id'];

$query_usuario=$pdo->prepare("SELECT * FROM tb_usuarios WHERE id_usuario=$id AND estado = '1'");
$query_usuario->execute();

$sesion_usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);

foreach ($sesion_usuarios as $sesion_usuario) {
    $sesion_id_usuario = $sesion_usuario['id_usuario'];
    $sesion_nombres = $sesion_usuario['nombres'];
    $sesion_apellidos = $sesion_usuario['apellidos'];
    $sesion_ci = $sesion_usuario['ci'];
    $sesion_celular = $sesion_usuario['celular'];
    $sesion_cargo = $sesion_usuario['cargo'];
    $sesion_email = $sesion_usuario['email'];
    $sesion_password = $sesion_usuario['password'];
}


?>



  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Editar Usuario</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card">
                <div class="card-header bg-success">
                    Llene la información con mucho cuidado
                </div>
                <div class="card-body">
                    <form action="controller_edit.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" name="nombres" value="<?php echo $sesion_nombres?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" value="<?php echo $sesion_apellidos?>" name="apellidos" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="number" value="<?php echo $sesion_ci?>" name="ci" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="number" value="<?php echo $sesion_celular?>" name="celular" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cargo</label>
                                    <select name="cargo" class="form-control" id="">
                                        <option value="<?php echo $sesion_cargo?>"><?php echo $sesion_cargo?></option>
                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                        <option value="DOCENTE">DOCENTE</option>
                                        <option value="ESTUDIANTE">ESTUDIANTE</option>
                                        <option value="PUBLICO">PÚBLICO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="email" value="<?php echo $sesion_email?>" name="email" class="form-control" required>
                                    <input type="hidden" value="<?php echo $id?>" name="id">
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input id="pass" type="password" value="<?php ?>" name="password" class="form-control" required>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Verificación de Password</label>
                                    <input id="pass_ferified" type="password" name="verified_password" class="form-control" required>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <a href="index.php" class="btn btn-default btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" onclick="return confirm('Verificaque los campos esten correctos')" class="btn btn-success btn-block">Actualizar Usuario</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
</div>
  <!-- /.content-wrapper -->
<?php
  include('../../layout/admin/parte2.php');
?>

