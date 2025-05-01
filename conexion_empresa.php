<?php
$host = 'localhost';
$user = 'root'; 
$pass = '';
$db = 'empresa';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Error en la conexion: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>