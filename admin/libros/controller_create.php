<?php
include('../../app/config/config.php');
include('../../app/config/conexion.php');

$codigo = $_POST['codigo'];
$area=$_POST['area'];
$campo=$_POST['campo'];
$editorial=$_POST['editorial'];
$autor=$_POST['autor'];
$titulo=$_POST['titulo'];
$ciudad=$_POST['ciudad'];
$ano_publicacion=$_POST['ano_publicacion'];
$nro_edicion=$_POST['nro_edicion'];
$nro_paginas=$_POST['nro_paginas'];
$nro_ejemplares=$_POST['nro_ejemplares'];
$formato=$_POST['formato'];
$observaciones=$_POST['observaciones'];
$codigo_barra=$_POST['codigo_barra'];


    $sentencia = $pdo->prepare("INSERT INTO tb_libros
    (codigo, area, campo, editorial, autor, titulo, ciudad, ano_publicacion, nro_edicion, paginas, ejemplares, formato, observaciones, codigo_barra,fyh_creacion, estado)
    VALUE(:codigo,:area,:campo,:editorial,:autor,:titulo,:ciudad,:ano_publicacion,:nro_edicion,:paginas,:ejemplares,:formato,:observaciones,:codigo_barra,:fyh_creacion,:estado)");

    $sentencia->bindParam(':codigo',$codigo);
    $sentencia->bindParam(':area',$area);
    $sentencia->bindParam(':campo',$campo);
    $sentencia->bindParam(':editorial',$editorial);
    $sentencia->bindParam(':autor',$autor);
    $sentencia->bindParam(':titulo',$titulo);
    $sentencia->bindParam(':ciudad',$ciudad);
    $sentencia->bindParam(':ano_publicacion',$ano_publicacion);
    $sentencia->bindParam(':nro_edicion',$nro_edicion);
    $sentencia->bindParam(':paginas',$nro_paginas);
    $sentencia->bindParam(':ejemplares',$nro_ejemplares);
    $sentencia->bindParam(':formato',$formato);
    $sentencia->bindParam(':observaciones',$observaciones);
    $sentencia->bindParam(':codigo_barra',$codigo_barra);
    $sentencia->bindParam(':fyh_creacion',$fyh_actual);
    $sentencia->bindParam(':estado',$estado);

    if($sentencia->execute()){
        echo "Se registro la informacion correctamente";
        session_start();
        $_SESSION['msj']="Se registro el libro de manera correcta";
        header("Location: $URL/admin/libros");
    }else{
        echo "Error al registrar a la base de datos";
        
        session_start();
        $_SESSION['msj']="Error al introducir la informacion";
    }





?>