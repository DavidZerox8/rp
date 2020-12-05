<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'rp');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    /*echo 'Conexion exitosa'; */
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>