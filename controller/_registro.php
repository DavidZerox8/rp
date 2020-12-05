<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $clave_hash = password_hash($clave, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM usuarios WHERE correo=:correo");
    $query->bindParam("correo", $correo, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo 'Correo ya registrado!';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios(usuario,clave,correo,tipo) VALUES (:usuario,:clave_hash,:correo,2)");
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam("clave_hash", $clave_hash, PDO::PARAM_STR);
        $query->bindParam("correo", $correo, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo 'Su registro fue exitoso';
        } else {
            echo 'Algo salio mal!';
        }
    }
}
 
?>