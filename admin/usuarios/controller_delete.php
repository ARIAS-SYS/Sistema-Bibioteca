<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$id = $_POST['id'];


    $sentencia = $pdo->prepare("UPDATE tb_usuarios SET
    estado='0',
    fyh_eliminacion=:fyh_eliminacion 
    WHERE id_usuario=:id");

    $sentencia->bindParam(':fyh_eliminacion',$fyh_actual);
    $sentencia->bindParam(':id',$id);

    if($sentencia->execute()){
        echo "Se elimino la informacion correctamente";
        session_start();
        $_SESSION['msj']="Se elimino el registro correctamente";
        header("Location: $URL/admin/usuarios");
    }else{
        echo "Error al eliminar de la base de datos a la base de datos";
        session_start();
        $_SESSION['msj']="Error al eliminar registro";

    }



?>