<?php
// Conectar a la base de datos (reemplazar con tus propias credenciales)
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$email = $_POST['email'];

// Insertar datos en la base de datos
$sql = "INSERT INTO socios (nombre, apellido, edad, email) VALUES ('$nombre', '$apellido', $edad, '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Socio agregado con éxito";
} else {
    echo "Error al agregar socio: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
