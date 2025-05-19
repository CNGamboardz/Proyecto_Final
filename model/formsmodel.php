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
        $consulta = "INSERT INTO usuario (NombreUsuario, Apellido, CorreoElectronico, NumeroTelefono, Contrasena, id_rango)
                     VALUES (:nombres, :apellidos, :correo, :telefono, :contrasena, 2)";
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
    
    public function GuardarAdministrador($nombres, $apellidos, $telefono, $correo, $contrasena)
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
        $consulta = "INSERT INTO usuario (NombreUsuario, Apellido, CorreoElectronico, NumeroTelefono, Contrasena, id_rango)
                     VALUES (:nombres, :apellidos, :correo, :telefono, :contrasena, 1)";
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
        session_start(); // Asegúrate de llamar session_start() antes de usar $_SESSION
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM usuario WHERE CorreoElectronico = :correo";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':correo', $correo, PDO::PARAM_STR);
        $resultado->execute();
    
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
    
        // Verificar si la contraseña almacenada es encriptada (longitud típica de password_hash)
        if ($usuario) {
            // Si la contraseña tiene una longitud de 60 caracteres, es probable que esté encriptada
            if (strlen($usuario['Contrasena']) === 60) {
                // Validamos la contraseña encriptada
                if (password_verify($contrasena, $usuario['Contrasena'])) {
                    $_SESSION['ID_usuario'] = $usuario['ID_usuario'];
                    // Validamos el rol del usuario según el id_rango
                    if ($usuario['id_rango'] == 1) {
                        $usuario['rol'] = 'ADMINISTRADOR'; // Asignamos el rol de Administrador
                    } elseif ($usuario['id_rango'] == 2) {
                        $usuario['rol'] = 'CLIENTE'; // Asignamos el rol de Cliente
                    }
                    return $usuario; // Retorna el usuario con el rol asignado
                }
            } else {
                // Comparar directamente si la contraseña no está encriptada
                if ($contrasena === $usuario['Contrasena']) {
                    $_SESSION['ID_usuario'] = $usuario['ID_usuario'];
                    // Validamos el rol del usuario según el id_rango
                    if ($usuario['id_rango'] == 1) {
                        $usuario['rol'] = 'ADMINISTRADOR'; // Asignamos el rol de Administrador
                    } elseif ($usuario['id_rango'] == 2) {
                        $usuario['rol'] = 'CLIENTE'; // Asignamos el rol de Cliente
                    }
                    return $usuario; // Retorna el usuario con el rol asignado
                }
            }
        }
        return false; // Retorna false si no se encuentra el usuario o no es válido
    }

public function ValidarOperadora($correo, $contrasena) {
    session_start(); // Asegúrate de iniciar sesión
    include_once('database_connection.php');
    $cnn = new Conexion();
    
    $consulta = "SELECT * FROM operadoras WHERE correoelectronico = :correo";
    $resultado = $cnn->prepare($consulta);
    $resultado->bindParam(':correo', $correo, PDO::PARAM_STR);
    $resultado->execute();

    $operadora = $resultado->fetch(PDO::FETCH_ASSOC);

    if ($operadora) {
        // Validar contraseña encriptada (password_hash)
        if (strlen($operadora['contrasena']) === 60) {
            if (password_verify($contrasena, $operadora['contrasena'])) {
                // Guardar en sesión
                $_SESSION['ID_operadora'] = $operadora['id_operadoras'];
                $_SESSION['usuario_nombre'] = $operadora['nombredeoperadoras'];
                $_SESSION['id_rango'] = 3;
                $operadora['rol'] = 'OPERADORA';

                return $operadora;
            }
        } else {
            // Contraseña sin encriptar (no recomendable, pero se incluye por compatibilidad)
            if ($contrasena === $operadora['contrasena']) {
                // Guardar en sesión
                $_SESSION['ID_operadora'] = $operadora['id_operadoras'];
                $_SESSION['usuario_nombre'] = $operadora['nombredeoperadoras'];
                $_SESSION['id_rango'] = 3;
                $operadora['rol'] = 'OPERADOR';

                return $operadora;
            }
        }
    }

    return false; // Si no coincide o no existe
}



    
    public function GuardarComentario($nombre_contacto, $correo_contacto, $mensaje, $usuario) {
        include_once('database_connection.php');
        $cnn = new Conexion(); // Objeto de conexión PDO

        $nombre_contacto = strtoupper($nombre_contacto);
        
        try {
            $consulta = "INSERT INTO contacto (Nombre, Correo, Mensaje, ID_usuario)
                         VALUES (:nombre, :correo, :mensaje, $usuario)";
            $stmt = $cnn->prepare($consulta);
    
            // Asignar parámetros
            $stmt->bindParam(':nombre', $nombre_contacto, PDO::PARAM_STR);
            $stmt->bindParam(':correo', $correo_contacto, PDO::PARAM_STR);
            $stmt->bindParam(':mensaje', $mensaje, PDO::PARAM_STR);
            $usuario = $_SESSION['ID_usuario'];  // ID del usuario de la sesión


            // Ejecutar la consulta
            if ($stmt->execute()) {
                return true; // Éxito
            } else {
                error_log("Error en la ejecución: " . print_r($stmt->errorInfo(), true));
                return false;
            }
        } catch (PDOException $e) {
            error_log("Error al guardar el comentario: " . $e->getMessage());
            return false;
        }
    }
    
    public function EliminarDato($paquete){
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "DELETE FROM catalogos WHERE id_catalogo = :id_catalogo"; // Usamos un marcador de posición
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':id_catalogo', $paquete, PDO::PARAM_INT); // Vinculamos el parámetro
    
        if ($resultado->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editarcatalogo($id, $nombre, $descripcion, $precio){
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "UPDATE catalogos SET Nombre = :nombre, Descripcion = :descripcion, Precio = :precio WHERE id_catalogo = :id";
        $stmt = $cnn->prepare($consulta);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(':precio', $precio, PDO::PARAM_STR); // Considera cambiar a PDO::PARAM_INT si es un número
        return $stmt->execute();
    }
    

    public function ObtenerCatalogoPorId($id) {
        include_once('database_connection.php');
        $cnn = new Conexion();
        $consulta = "SELECT * FROM catalogos WHERE id_catalogo = :id"; 
        $stmt = $cnn->prepare($consulta);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC); // Devuelve un único registro
        } else {
            return null;
        }
    }
    
    public function AgregarProducto($Nombre, $Descripcion, $Precio, $imagen, $url, $id_categoria) {
        include_once('database_connection.php');
        $cnn = new Conexion();
    
        $Nombre = strtoupper($Nombre);
        $urls = $url; // Asegúrate de asignar $url a $urls
    
        $consulta = "INSERT INTO catalogos (Nombre, Descripcion, Precio, imagen, urls, id_categoria)
                     VALUES (:Nombre, :Descripcion, :Precio, :imagen, :urls, :id_categoria)";
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':Nombre', $Nombre, PDO::PARAM_STR);
        $resultado->bindParam(':Descripcion', $Descripcion, PDO::PARAM_STR);
        $resultado->bindParam(':Precio', $Precio, PDO::PARAM_STR);
        $resultado->bindParam(':imagen', $imagen, PDO::PARAM_STR);
        $resultado->bindParam(':urls', $urls, PDO::PARAM_STR);
        $resultado->bindParam(':id_categoria', $id_categoria, PDO::PARAM_STR);
    
        if ($resultado->execute()) {
            return true; // Registro exitoso
        } else {
            return false; // Error al registrar
        }
    }
    
}
?>