<?php     
    
    include('config.php');
    
    session_start();

    if (isset($_POST['login'])) {
 
    $usuario = $_POST['usuario_l'];
    $clave = $_POST['clave_l'];
 
    $query = $connection->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        $variable1;
        echo '<script> alert("Por favor, revise sus accessos e intentelo de nuevo"); 
        
        window.location="../index.php";
        
        </script>';
        /*header('location: ../index.php?variable1=error1');*/
    } else {
        if (password_verify($clave, $result['clave'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['tipo'] = $result['tipo'];
            $_SESSION['nombre'] = $result['usuario'];
            header('Location: redirec.php');
        } else {
            echo '<script> alert("Por favor, revise sus accessos e intentelo de nuevo"); </script>';
            header('location: ../index.php');
                
        }
    }
}


?>


