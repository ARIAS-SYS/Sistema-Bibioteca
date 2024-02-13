
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
                    <h1 class="m-0">Registro de un nuevo Libro</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="card">
                <div class="card-header bg-primary">
                    Llene la información con mucho cuidado
                </div>
                <?php
            if(isset($_SESSION['msj'])){
              $mensaje=$_SESSION['msj'];
              

          ?>
          <script>
            Swal.fire({
              title: "Éxito...!",
              text: "<?php echo $mensaje; ?>",
              icon: "success"
            });
          </script>
          <?php
            unset($_SESSION['msj']);
            }
          ?>
                <div class="card-body">
                    <form action="controller_create.php" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Código</label>
                                    <?php
                                        $contador=0;
                                        $query=$pdo->prepare("SELECT * FROM tb_libros WHERE estado = '1'");
                                        $query->execute();
    
                                        $libros = $query->fetchAll(PDO::FETCH_ASSOC);
    
    
                                        foreach ($libros as $libro) {
                                            $contador = $libro['id_libro'];
                                        }
                                        $contador="COD-".$contador+1;
                                        ?>
                                    <input type="text" name="codigo" value="<?php echo $contador;?>" class="form-control" disabled>
                                    <input type="hidden" name="codigo" value="<?php echo $contador;?>" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Área</label>
                                    <table>
                                        <td>
                                            <select name="area" class="form-control" id="">
                                    <?php
                                        $query=$pdo->prepare("SELECT * FROM tb_areas WHERE estado = '1'");
                                        $query->execute();
    
                                        $areas = $query->fetchAll(PDO::FETCH_ASSOC);
    
    
                                        foreach ($areas as $area) {
                                            $area = $area['area'];
                                        
                                        ?>
                                                <?php 
                                                echo "<option value='$area'>$area</option>";
                                        }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    +
                                            </button>    
                                        </td>
                                    </table>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Campo</label>
                                    <table>
                                        <td>
                                            <select name="campo" class="form-control" id="">
                                    <?php
                                        $query=$pdo->prepare("SELECT * FROM tb_campos WHERE estado = '1'");
                                        $query->execute();

                                        $campos = $query->fetchAll(PDO::FETCH_ASSOC);


                                        foreach ($campos as $campo) {
                                            $campo = $campo['campo'];
                                        
                                        ?>
                                                <?php 
                                                echo "<option value='$campo'>$campo</option>";
                                        }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCampo">
                                                    +
                                            </button>    
                                        </td>
                                    </table>                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Editorial</label>
                                    <table>
                                        <td>
                                            <select name="editorial" class="form-control" id="">
                                    <?php
                                        $query=$pdo->prepare("SELECT * FROM tb_editorial WHERE estado = '1'");
                                        $query->execute();

                                        $editoriales = $query->fetchAll(PDO::FETCH_ASSOC);


                                        foreach ($editoriales as $editorial) {
                                            $editorial = $editorial['editorial'];
                                        
                                        ?>
                                                <?php 
                                                echo "<option value='$editorial'>$editorial</option>";
                                        }
                                                ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalEditorial">
                                                    +
                                            </button>    
                                        </td>
                                    </table>


                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Autor</label>
                                    <input type="text" name="autor" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Título</label>
                                    <input type="text" name="titulo" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Ciudad</label>
                                    <input type="text" name="ciudad" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Año de Publicación</label>
                                    <input type="number" name="ano_publicacion" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nro de Edición</label>
                                    <input type="number" name="nro_edicion" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nro de Páginas</label>
                                    <input type="number" name="nro_paginas" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Formato</label>
                                    <select name="formato" class="form-control" id="">
                                        <option value="FÍSICO">FÍSICO</option>
                                        <option value="DIGITAL">DIGITAL</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nro de Ejemplares</label>
                                    <input type="number" name="nro_ejemplares" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Observaciones</label>
                                    <textarea name="observaciones" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Código de Barras</label>
                                    <input type="number" name="codigo_barra" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <a href="create.php" class="btn btn-default btn-block">Cancelar</a>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" onclick="return confirm('Verificaque los campos esten correctos')" class="btn btn-primary btn-block">Registrar Libro</button>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_area.php" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <center>
                            <label for="">Nombre del Área</label>

                        </center>
                        <input type="text" name="area" class="form-control">
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCampo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Campo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_campo.php" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <center>
                            <label for="">Nombre del Campo</label>

                        </center>
                        <input type="text" name="campo" class="form-control">
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalEditorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Editorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller_editorial.php" method="POST">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <center>
                            <label for="">Nombre del Editorial</label>

                        </center>
                        <input type="text" name="editorial" class="form-control">
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- /.content-wrapper -->
<?php
  include('../../layout/admin/parte2.php');
?>

