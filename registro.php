<?php
 
include('controller/config.php');
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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="assets/css/style.css">        
   
</head>

<body>

    <div class="modal" id="Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Iniciar Sesi&oacute;n</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="post" action="" name="signup-form">
                    <div class="form-element">
                        <label>Username</label>
                        <input type="text" name="usuario" required />
                    </div>
                    <div class="form-element">
                        <label>Email</label>
                        <input type="email" name="correo" required />
                    </div>
                    <div class="form-element">
                        <label>Password</label>
                        <input type="password" name="clave" required />
                    </div>
                    <button type="submit" name="register" value="register">Register</button>
                </form>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
