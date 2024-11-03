<?php
// Configuración de la base de datos
$servername = "localhost"; // Cambia esto si tu servidor es diferente
$username = "u776219506_root"; // Cambia esto por tu usuario de base de datos
$password = "Equip@3_web"; // Cambia esto por tu contraseña de base de datos
$dbname = "u776219506_chiapasoculto"; // Cambia esto por tu nombre de base de datos

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtén los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Prepara y ejecuta la consulta SQL
$sql = "INSERT INTO usuarios (nombre, apellidos, telefono, correo, contrasena) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nombre, $apellidos, $telefono, $correo, $contrasena);

if ($stmt->execute()) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión
$stmt->close();
$conn->close();
?>
