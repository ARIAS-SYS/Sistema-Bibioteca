<?php
    include('../app/config/config.php');
    include('../app/config/conexion.php');

    session_start();

    if(isset($_SESSION['sesion_email'])){
        echo "existe session <br> session destruida";
        session_destroy();

    }else{
        echo "no existe session";
        header('Location: '.$URL.'/login');
    }



?>