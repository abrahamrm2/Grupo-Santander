<?php
$servername = "localhost";
$username = "qrirleag_abrahambase1";
$password = "Supersell1.";
$database = "qrirleag_abrahambase1";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

// Insertar datos en la base de datos
$sql = "INSERT INTO socios (nombre, apellido, email, telefono) VALUES ('$nombre', '$apellido', '$email', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Socio registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>