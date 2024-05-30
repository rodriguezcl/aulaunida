<?php
include('../../../app/config.php');

$nombre_rol= $_POST['nombre_rol'];

if($nombre_rol== ""){
    session_start();
    $_SESSION['mensaje'] = "Completa el campo vacío";
    $_SESSION['icono'] = "error";
    header('Location:'.APP_URL."/admin/roles/create.php");
}
else{
    $sentencia = $pdo->prepare("INSERT INTO roles (nombre_rol,fyh_creacion,estado) 
    VALUES (:nombre_rol,:fyh_creacion,:estado)");
    
    $sentencia->bindParam('nombre_rol', $nombre_rol);
    $sentencia->bindParam('fyh_creacion', $fechaHora);
    $sentencia->bindParam('estado', $estado_de_registro);
    
    
    if($sentencia->execute()){
        session_start();
        $_SESSION['mensaje'] = "¡Nuevo rol creado con éxito!";
        $_SESSION['icono'] = "success";
        header('Location:'.APP_URL."/admin/roles");
    }
    else{
        session_start();
        $_SESSION['mensaje'] = "¡Error!, no se pudo crear el nuevo rol";
        $_SESSION['icono'] = "error";
        header('Location:'.APP_URL."/admin/roles/create.php");
    }
}


