
<?php

include('../../app/config/config.php');
include('../../app/config/conexion.php');


include('../../layout/admin/sesion.php');


include('../../layout/admin/parte1.php');
?>




  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registro de un nuevo Usuario</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card">
                <div class="card-header bg-primary">
                    Llene la información con mucho cuidado
                </div>
                <div class="card-body">
                    <form action="controller_create.php" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" name="nombres" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" name="apellidos" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="number" name="ci" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Celular</label>
                                    <input type="number" name="celular" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cargo</label>
                                    <select name="cargo" class="form-control" id="">
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
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input id="pass" type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Verificación de Password</label>
                                    <input id="pass_ferified" type="password" name="verified_password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <a href="create.php" class="btn btn-default btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" onclick="return confirm('Verificaque los campos esten correctos')" class="btn btn-primary btn-block">Registrar Usuario</button>
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

