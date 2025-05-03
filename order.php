<?php
include('conexion.php'); // Incluir la conexión a la base de datos

// Obtener los datos enviados desde el frontend
$customerName = $_POST['name'];
$customerEmail = $_POST['email'];
$customerPhone = $_POST['phone'];
$cart = json_decode($_POST['cart'], true); // Decodificar el carrito

// Insertar los datos del cliente en la base de datos
$sql = "INSERT INTO clientes (nombre, correo, teléfono) 
        VALUES ('$customerName', '$customerEmail', '$customerPhone')";

if ($conn->query($sql) === TRUE) {
    // Obtener el ID del cliente recién insertado
    $customerId = $conn->insert_id;

    // Insertar los productos del carrito
    foreach ($cart as $item) {
        $productId = $item['id'];
        $productName = $item['name'];
        $productPrice = $item['price'];

    }

    // Responder al frontend
    echo json_encode(["success" => true, "message" => "Compra exitosa"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al registrar el cliente: " . $conn->error]);
}

$conn->close();


?>

