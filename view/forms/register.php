<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Patrona&display=swap" rel="stylesheet">

    <title>Registrarse</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
</head>

<body>
    <?php require_once("./view/layout/header.php"); ?>
    <br><br>

    <div class="separador">
    </div>

    <br><br>

    <center>
        <h2 class="patrona">REGISTRARSE</h2>
    </center>
    <br><br><br><br><br><br>
    <div class="inisec">
        <div class="borde">
            <div class="inicioBor">
                <img src="view/img/img2.png" alt="Personaje" width="200">

             <form action="index.php?u=registrar" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Número de Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
                <br>
            </div>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
    <table class="piepagina" width=100%>
        <tr>
            <td width="15%">
                <br><br><br>
                <img src="./view/img/logo_chiapasoculto.png" width="100%">
                <br><br>
            </td>
            <td width="22%">
                <center>
                    <h5>Servicio al Cliente</h5>
                </center>
                <a href="contacto.php">
                    <ul class="custom-bullets">
                        <li>Contacto</li>
                    </ul>
                </a>
                <a href="login.php">
                    <ul class="custom-bullets">
                        <li>Mi Cuenta</li>
                    </ul>
                </a>
            </td>
            <td width="22%">
                <center>
                    <h5>Tours Destacados</h5>
                </center>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>El Arcote</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Lagunas de Montebello</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Zona Arqueológica De Palenque</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Zona Arqueológica De Tonina</li>
                    </ul>
                </a>
            </td>
            <td width="22%">
                <center>
                    <h5>Paquetes Destacados</h5>
                </center>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Arqueología y Selva</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Paraíso en la Selva</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Expedición Chiapaneca</li>
                    </ul>
                </a>
                <a href="">
                    <ul class="custom-bullets2">
                        <li>Rutas Mágicas de Chiapas</li>
                    </ul>
                </a>
            </td>
            <td width="22%">
                <br><br><br>
                <a class="normal" href="">
                    <img src="./view/img/geolocalizacion.png" width="20%" alt="Icono de geolocalización">
                    Ver Ubicación
                </a>

            </td>
        </tr>

    </table>
    <br><br>
    <?php require_once("./view/layout/footer.php"); ?>
</body>

</html>