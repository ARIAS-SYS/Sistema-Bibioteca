<?php

session_start();

if(isset($_SESSION['sesion_email'])){

}else{
    echo "no existe session";
    header('Location: '.$URL.'/login');
}