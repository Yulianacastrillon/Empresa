<?php
require_once 'conexion_empresa.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

mysqli_set_charset($conn, "utf8mb4");

$id_empresas=trim($_POST['id_empresas']);
$empresa=trim($_POST['empresa']);
$representante=trim($_POST['representante']);
$categoria=trim($_POST['categoria']);
$nit=trim($_POST['nit']);
$email=trim($_POST['email']);
$telefono=trim($_POST['telefono']);
$direccion=trim($_POST['direccion']);



$consulta = mysqli_query($conn, "SELECT * FROM empresas WHERE LOWER(nit)=LOWER('$nit')");


if(mysqli_num_rows($consulta)==0) {
   
    $query = "INSERT INTO empresas(id_empresas,empresa,representante,categoria,nit,email,telefono,direccion) VALUES('$id_empresas','$empresa','$representante','$categoria','$nit','$email','$telefono','$direccion')";

    if (mysqli_query($conn,$query)) {
        echo "Datos fueron guardados exitosamente.";
    } else {
        echo "Error, datos No guardados: " . mysqli_error($conn);
    }
} else {
    echo "Los datos no fueron guardados, ya existe un registro con el mismo nit..";
}

mysqli_close($conn);

?>