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

// Verifica si los datos del formulario están definidos
if (isset($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['correo'], $_POST['contrasena'])) {
    // Filtra y valida los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellidos = htmlspecialchars(trim($_POST['apellidos']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $correo = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

    if ($correo !== false) { // Asegúrate de que el correo es válido
        // Prepara y ejecuta la consulta SQL
        $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, correo, contrasena) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("sssss", $nombre, $apellidos, $telefono, $correo, $contrasena);
            
            if ($stmt->execute()) {
                echo "Registro exitoso";
            } else {
                echo "Error en la ejecución de la consulta: " . $stmt->error;
            }
            
            // Cierra el statement
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
        }
    } else {
        echo "Correo electrónico no válido.";
    }
} else {
    echo "Por favor, complete todos los campos.";
}

// Cierra la conexión
$conn->close();
?>