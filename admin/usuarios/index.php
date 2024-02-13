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
            <h1 class="m-0">Listado de Usuarios <a href="create.php" style="margin-left: 15px;" class="btn btn-primary">Nuevo Usuario</a> </h1>
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
                                
              <table id="tabla-1" class=" display table table-striped table-hover table-bordered table-sm"style="width:100%">
                <thead class="thead-dark">
                  <tr>
                    <th>Nro</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Carnet de Indentidad</th>
                    <th>Celular</th>
                    <th>E-mail</th>
                    <th><center>Acciones</center></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $query=$pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = '1'");
                $query->execute();

                $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

                $cont=1;

                foreach ($usuarios as $usuario) {
                    $id_usuario = $usuario['id_usuario'];
                    $nombres = $usuario['nombres'];
                    $apellidos = $usuario['apellidos'];
                    $ci = $usuario['ci'];
                    $celular = $usuario['celular'];
                    $email = $usuario['email'];


                ?>
                  <tr>
                    <td><?php echo $cont;  $cont++;?></td>
                    <td><?php echo $nombres;?></td>
                    <td><?php echo $apellidos;?></td>
                    <td><?php echo $ci;?></td>
                    <td><?php echo $celular;?></td>
                    <td><?php echo $email;?></td>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('../../layout/admin/parte2.php');
?>
  
