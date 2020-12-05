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

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }

        h1 {
            font-family: 'Passion One';
            font-size: 2rem;
            text-transform: uppercase;
        }

        label {
            width: 150px;
            display: inline-block;
            text-align: left;
            font-size: 1.5rem;
            font-family: 'Lato';
        }

        input {
            border: 2px solid #ccc;
            font-size: 1.5rem;
            font-weight: 100;
            font-family: 'Lato';
            padding: 10px;
        }

        form {
            margin: 25px auto;
            padding: 20px;
            border: 5px solid #ccc;
            width: 500px;
            background: #eee;
        }

        div.form-element {
            margin: 20px 0;
        }

        button {
            padding: 10px;
            font-size: 1.5rem;
            font-family: 'Lato';
            font-weight: 100;
            background: yellowgreen;
            color: white;
            border: none;
        }

        p.success,
        p.error {
            color: white;
            font-family: lato;
            background: yellowgreen;
            display: inline-block;
            padding: 2px 10px;
        }

        p.error {
            background: orangered;
        }

    </style>
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
