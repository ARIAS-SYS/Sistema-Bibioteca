<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$nombres = $_POST['nombres'];
$apellidos=$_POST['apellidos'];
$ci=$_POST['ci'];
$celular=$_POST['celular'];
$cargo=$_POST['cargo'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_verificado=$_POST['verified_password'];

$password_encriptado=password_hash($password, PASSWORD_DEFAULT);


if($password == $password_verificado){
    $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
    (nombres, apellidos, ci, celular, cargo, email, password,fyh_creacion, estado)
    VALUE(:nombres,:apellidos,:ci,:celular,:cargo,:email,:password,:fyh_creacion,:estado)");

    $sentencia->bindParam(':nombres',$nombres);
    $sentencia->bindParam(':apellidos',$apellidos);
    $sentencia->bindParam(':ci',$ci);
    $sentencia->bindParam(':celular',$celular);
    $sentencia->bindParam(':cargo',$cargo);
    $sentencia->bindParam(':email',$email);
    $sentencia->bindParam(':password',$password_encriptado);
    $sentencia->bindParam(':fyh_creacion',$fyh_actual);
    $sentencia->bindParam(':estado',$estado);

    if($sentencia->execute()){
        echo "Se registro la informacion correctamente";
        session_start();
        $_SESSION['msj']="Se registro al  usuario demanera correcta";
        header("Location: $URL/admin/usuarios");
    }else{
        echo "Error al registrar a la base de datos";
        
        session_start();
        $_SESSION['msj']="Error al introducir la informacion";
    }
}else{
    echo "La contraseña de verificacion es incorecta";
}





?>