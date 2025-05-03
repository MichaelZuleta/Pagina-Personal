<?php
$servidor = "localhost";  // Servidor de la base de datos (por defecto 'localhost')
$usuario = "root";        // Usuario de MySQL (en XAMPP el usuario por defecto es 'root')
$clave = "";              // Contraseña de MySQL (por defecto está vacía en XAMPP)
$baseDeDatos = "paginavideojuegosDB"; // Nombre de la base de datos que ya habías creado

// Crear conexión
$conn = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
