<!-- <?php
    foreach ($paquete as $key => $value) {
        foreach ($value as $valor) {
            $id=$valor['id_catalogo'];
        }
    }
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Editar Chiapas Oculto</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
</head>

<body>
    <?php require_once("./view/layout/header.php"); ?>
    <br><br>
    <div class="separador">
    </div>

    <div class="rectangle12">
    <form action="index.php?u=EditarCatalogo&id=<?php echo $paquete['id_catalogo'];?>" method="POST">
        <h2 style="text-align: center;">EDITAR <img src="view/img/editar_logo.png" width="4%"></h2>
        <center>
            <!-- ID_CATALOGO (deshabilitado) -->
            <p class="normalp">ID_CATALOGO<b class="obligado" style="color: red;">*</b></p>
            <input type="text" class="textbox2" name="id_catalago" value="<?php echo htmlspecialchars($id); ?>" readonly>
            <br>

            <!-- NOMBRE -->
            <p class="normalp">NOMBRE<b class="obligado" style="color: red;">*</b></p>
            <input type="text" class="textbox2" name="nombre" value="<?php echo htmlspecialchars($paquete['Nombre']); ?>" required>
            <br>

            <!-- DESCRIPCIÓN -->
            <p class="normalp">DESCRIPCIÓN<b class="obligado" style="color: red;">*</b></p>
            <textarea class="textbox3" name="descripcion" required><?php echo htmlspecialchars($paquete['Descripcion']); ?></textarea>
            <br>

            <!-- PRECIO -->
            <p class="normalp">PRECIO<b class="obligado" style="color: red;">*</b></p>
            <input type="text" class="textbox2" name="precio" value="<?php echo htmlspecialchars($paquete['Precio']); ?>" required>
        </center>
        <br>
        <center>
            <button type="submit" class="btn9">
                <p style="color: white;">GUARDAR CAMBIOS</p>
            </button>
        </center>
    </form>
</div>
    <br><br><br><br><br><br>
    <?php require_once("./view/layout/footer.php"); ?>
</body>
</html>