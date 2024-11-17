<?php
 
Class FormsModel{
    public function GuardarUsuario($nombres, $apellidos, $telefono, $correo, $contrasena)
    {
        include_once('database_connection.php');
        $cnn = new Conexion();
    
        // Convertir los nombres y apellidos a mayúsculas
        $nombres = strtoupper($nombres);
        $apellidos = strtoupper($apellidos);
    
        // Verificar si el correo ya existe en la base de datos
        $consultaCorreo = "SELECT COUNT(*) FROM usuario WHERE CorreoElectronico = :correo";
        $verificarCorreo = $cnn->prepare($consultaCorreo);
        $verificarCorreo->bindParam(':correo', $correo, PDO::PARAM_STR);
        $verificarCorreo->execute();
    
        if ($verificarCorreo->fetchColumn() > 0) {
            // Si el correo ya existe, retorna un error o falso
            return "El correo ya está registrado.";
        }
    
        // Encriptar la contraseña antes de guardarla
        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);
    
        // Insertar los datos en la base de datos
        $consulta = "INSERT INTO usuario (NombreUsuario, Apellido, CorreoElectronico, NumeroTelefono, Contrasena)
                     VALUES (:nombres, :apellidos, :correo, :telefono, :contrasena)";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':nombres', $nombres, PDO::PARAM_STR);
        $resultado->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $resultado->bindParam(':correo', $correo, PDO::PARAM_STR);
        $resultado->bindParam(':telefono', $telefono, PDO::PARAM_STR);
        $resultado->bindParam(':contrasena', $contrasenaHash, PDO::PARAM_STR);
    
        if ($resultado->execute()) {
            return true; // Registro exitoso
        } else {
            return false; // Error al registrar
        }
    }    
    
    public function ValidarUsuario($correo, $contrasena) {
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM usuario WHERE CorreoElectronico = :correo";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':correo', $correo, PDO::PARAM_STR);
        $resultado->execute();

        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);

        // Comparar directamente la contraseña sin encriptar
        if ($usuario && password_verify($contrasena, $usuario['Contrasena'])) {
            return $usuario;
        } else {
            return false;
        }
    }

    
}
?>