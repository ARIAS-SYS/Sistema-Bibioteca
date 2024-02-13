<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos=$_POST['apellidos'];
$ci=$_POST['ci'];
$celular=$_POST['celular'];
$cargo=$_POST['cargo'];
$email=$_POST['email'];


    $sentencia = $pdo->prepare("UPDATE tb_usuarios SET
    nombres=:nombres, 
    apellidos=:apellidos, 
    ci=:ci, 
    celular=:celular, 
    cargo=:cargo, 
    email=:email,
    fyh_actualizacion=:fyh_actualizacion 
    WHERE id_usuario=:id");

    $sentencia->bindParam(':nombres',$nombres);
    $sentencia->bindParam(':apellidos',$apellidos);
    $sentencia->bindParam(':ci',$ci);
    $sentencia->bindParam(':celular',$celular);
    $sentencia->bindParam(':cargo',$cargo);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':fyh_actualizacion',$fyh_actual);
    $sentencia->bindParam(':id',$id);

    if($sentencia->execute()){
        echo "Se registro la informacion correctamente";
        session_start();
        $_SESSION['msj']="Se actualizo el registro correctamente";
        header("Location: $URL/admin/usuarios");
    }else{
        echo "Error al registrar a la base de datos";
        session_start();
        $_SESSION['msj']="Error al actualizar la informacion";

    }



?>