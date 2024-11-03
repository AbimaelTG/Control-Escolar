<?php
// Conectar a la base de datos
$conn = mysqli_connect("db", "root", "abimael", "midb");


// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

echo "Conexión exitosa";
?>

