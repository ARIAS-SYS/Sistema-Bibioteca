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
            <h1 class="m-0">Listado de Libros <a href="create.php" style="margin-left: 15px;" class="btn btn-primary">Nuevo Usuario</a> </h1>
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
          
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">

            <script>
              $(document).ready( function () {
                  $('#tabla-1').DataTable();
              } ); 

              //   $(document).ready(function() {
              //     $('#tabla-1').DataTable( {
              //         "pageLength": 5,
              //         "language": {
              //             "emptyTable": "No hay información",
              //             "info": "Mostrando START a END de TOTAL Usuarios",
              //             "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
              //             "infoFiltered": "(Filtrado de MAX total Usuarios)",
              //             "infoPostFix": "",
              //             "thousands": ",",
              //             "lengthMenu": "Mostrar MENU Usuarios",
              //             "loadingRecords": "Cargando...",
              //             "processing": "Procesando...",
              //             "search": "Buscador:",
              //             "zeroRecords": "Sin resultados encontrados",
              //             "paginate": {
              //                 "first": "Primero",
              //                 "last": "Ultimo",
              //                 "next": "Siguiente",
              //                 "previous": "Anterior"
              //             }
              //         }
              //     });
              // } );

              
            </script>
                <div class="table-responsive">
                <table id="tabla-1" class=" display table table-striped table-hover table-bordered table-sm"style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nro</th>
                            <th>Código</th>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Área</th>
                            <th>Campo</th>
                            <th>Ciudad</th>
                            <th>Editorial</th>
                            <th>Año de Publicación</th>
                            <th>Nro de Edición</th>
                            <th>Nro de Páginas</th>
                            <th>Formato</th>
                            <th>Ejemplares</th>
                            <th>Código de Barras</th>
                            <th>Observaciones</th>
                            <th><center>Acciones</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query=$pdo->prepare("SELECT * FROM tb_libros WHERE estado = '1'");
                    $query->execute();

                    $libros = $query->fetchAll(PDO::FETCH_ASSOC);

                    $cont=1;

                    foreach ($libros as $libro) {
                        $id_libro = $libro['id_libro'];
                        $codigo = $libro['codigo'];
                        $titulo = $libro['titulo'];
                        $autor = $libro['autor'];
                        $area = $libro['area'];
                        $campo = $libro['campo'];
                        $ciudad = $libro['ciudad'];
                        $editorial = $libro['editorial'];
                        $ano_publicacion = $libro['ano_publicacion'];
                        $nro_edicion = $libro['nro_edicion'];
                        $paginas = $libro['paginas'];
                        $formato = $libro['formato'];
                        $ejemplares = $libro['ejemplares'];
                        $observaciones = $libro['observaciones'];
                        $codigo_barra = $libro['codigo_barra'];
                        $cont++;


                    ?>
                    <tr>
                        <td><?php echo $cont;  $cont++;?></td>
                        <td><?php echo $codigo;?></td>
                        <td><?php echo $titulo;?></td>
                        <td><?php echo $autor;?></td>
                        <td><?php echo $area;?></td>
                        <td><?php echo $campo;?></td>
                        <td><?php echo $ciudad;?></td>
                        <td><?php echo $editorial;?></td>
                        <td><?php echo $ano_publicacion;?></td>
                        <td><?php echo $nro_edicion;?></td>
                        <td><?php echo $paginas;?></td>
                        <td><?php echo $formato;?></td>
                        <td><?php echo $ejemplares;?></td>
                        <td><?php echo $codigo_barra;?></td>
                        <td><?php echo $observaciones;?></td>
                        <td>
                        <center>
                            <a href="edit.php?id=<?php echo $id_usuario;?>" class="btn btn-success btn-sm">Editar <i class="fas fa-pen"></i></a>  
                            <a href="delete.php?id=<?php echo $id_usuario;?>" class="btn btn-danger btn-sm">Eliminar <i class="fas fa-trash"></i></a>  
                        </center>
                        </td>
                    </tr>
                    <?php
                        }

                    ?>
                    </tbody>
                </table>
                </div>              
              

              
            </div>
        </div>
        
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('../../layout/admin/parte2.php');
?>
  
