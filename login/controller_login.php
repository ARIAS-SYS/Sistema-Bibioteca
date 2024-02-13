<?php

include('../app/config/config.php');
include('../app/config/conexion.php');

$email=$_POST['email'];
$password=$_POST['password'];


// echo "el correo es $email y su pass $password";

$query_login=$pdo->prepare("SELECT * FROM tb_usuarios WHERE email='$email' AND estado='1'");
$query_login->execute();

$usuarios=$query_login->fetchAll(PDO::FETCH_ASSOC);

$contador=0;

foreach ($usuarios as $usuario) {
    $contador++;
    $nombres=$usuario['nombres'];
    $password_script=$usuario['password'];
}


if($contador==0){
    echo 'Usuario Incorrecto';
    header('Location: '.$URL.'/login/error.php');
}else{
    if (password_verify($password, $password_script)) {
        echo 'Usuario Correcto';

        session_start();
        $_SESSION['sesion_email']=$email;

        header('Location: '.$URL.'/admin');
    }
    else {
        echo 'Usuario Incorrecto';
        header('Location: '.$URL.'/login/error.php');
    }
}
