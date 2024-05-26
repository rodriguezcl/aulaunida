<?php

include('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND estado = '1' ";
$query = $pdo-> prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;

foreach ($usuarios as $usuario){
    $password_tabla = $usuario['password'];
    $contador++;
}
echo ($contador);

if( ($contador>0) && (password_verify($password,$password_tabla)) ){
    echo "los datos son correctos";
    header('Location:'.APP_URL."/admin");
}else{
    echo "los datos son incorrectos";
    header('Location:'.APP_URL."/login");
}