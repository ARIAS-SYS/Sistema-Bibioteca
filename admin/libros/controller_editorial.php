<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$editorial = $_POST['editorial'];

    $sentencia = $pdo->prepare("INSERT INTO tb_editorial
    (editorial,fyh_creacion, estado)
    VALUE(:editorial,:fyh_creacion,:estado)");

    $sentencia->bindParam(':editorial',$editorial);
    $sentencia->bindParam(':fyh_creacion',$fyh_actual);
    $sentencia->bindParam(':estado',$estado);

    if($sentencia->execute()){
        echo "Se registro el campo correctamente";
        session_start();
        $_SESSION['msj']="Se registro el editorial de manera correcta";
        header("Location: $URL/admin/libros/create.php");
    }else{
        echo "Error al registrar a la base de datos";
        
        session_start();
        $_SESSION['msj']="Error al introducir la informacion";
    }





?>