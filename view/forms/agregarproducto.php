<?php
require_once("./model/database_connection.php");  // Ajusta la ruta si es necesario

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();

    // Subir imagen
    $carpetaDestino = 'view/img/';
    $imagenSubida = false;
    $rutaImagen = '';

    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $nombreImagen = basename($_FILES['imagen']['name']);
        $rutaDestino = $carpetaDestino . $nombreImagen;

        $tipoArchivo = strtolower(pathinfo($rutaDestino, PATHINFO_EXTENSION));
        $formatosPermitidos = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($tipoArchivo, $formatosPermitidos)) {
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
                $imagenSubida = true;
                $rutaImagen = $rutaDestino;  // Esto es lo que irá en "urls"
                echo "<div class='alert alert-success'>Imagen subida correctamente a $rutaDestino</div>";
            } else {
                echo "<div class='alert alert-danger'>Error al subir la imagen.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Formato no permitido. Solo JPG, PNG, GIF.</div>";
        }
    }

            session_start(); // Asegúrate de iniciar la sesión

            // Verificar si la sesión contiene ID de operadora
            if (!isset($_SESSION['ID_operadora'])) {
                echo "<div class='alert alert-danger'>No se ha iniciado sesión correctamente.</div>";
                exit;
            }

            // Recoger datos del formulario
            $nombre = $_POST['Nombre'];
            $descripcion = $_POST['Descripcion'];
            $precio = $_POST['Precio'];
            $categoria = $_POST['id_categoria'];
            $id_operadoras = $_SESSION['ID_operadora']; // ← Usamos el ID desde la sesión

            // Insertar en la base de datos si la imagen se subió bien
            if ($imagenSubida) {
                try {
                    $sql = "INSERT INTO catalogos (Nombre, Descripcion, Precio, imagen, id_categoria, id_operadoras)
                            VALUES (:nombre, :descripcion, :precio, :imagen, :id_categoria, :id_operadoras)";

                    $stmt = $conexion->prepare($sql);
                    $stmt->bindParam(':nombre', $nombre);
                    $stmt->bindParam(':descripcion', $descripcion);
                    $stmt->bindParam(':precio', $precio);
                    $stmt->bindParam(':imagen', $rutaImagen); // Si guardas la ruta en 'imagen', está bien
                    $stmt->bindParam(':id_categoria', $categoria);
                    $stmt->bindParam(':id_operadoras', $id_operadoras);

                    $stmt->execute();

                    echo "<div class='alert alert-success'>Producto agregado correctamente al catálogo.</div>";
                } catch (PDOException $e) {
                    echo "<div class='alert alert-danger'>Error al insertar en la base de datos: " . $e->getMessage() . "</div>";
                }
            }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once("./view/layout/header.php"); ?>

    <div class="container mt-5">
        <h2 class="text-center">AGREGAR CATALOGO</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <!-- NOMBRE -->
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="Nombre" required>
            </div>

            <!-- DESCRIPCIÓN -->
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripción <span class="text-danger">*</span></label>
                <textarea class="form-control" name="Descripcion" required></textarea>
            </div>

            <!-- PRECIO -->
            <div class="mb-3">
                <label for="Precio" class="form-label">Precio <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name="Precio" required>
            </div>

            <!-- IMAGEN -->
            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen <span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="imagen" accept="image/*" onchange="previewImage(event)" required>
                <br>
                <img id="preview" src="#" alt="Vista previa" style="max-width: 200px; display: none;" />
            </div>

            <!-- CATEGORÍA -->
            <div class="mb-3">
                <label for="id_categoria" class="form-label">Categoría <span class="text-danger">*</span></label>
                <select class="form-select" name="id_categoria" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </div>

            <!-- BOTÓN -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Agregar Catalogo</button>
            </div>
        </form>
    </div>
    <br><br><br><br>
    <?php require_once("./view/layout/footer.php"); ?>

    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                const output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
