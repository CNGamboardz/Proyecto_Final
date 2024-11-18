<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes Chiapas Oculto</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once("./view/layout/header.php");?>
    <br><br>

    <img src="./view/img/paquetes.png" class="img-fluid" alt="Paquetes Chiapas Oculto" width=100%>

    <br><br>

    <div class="container">
        <p class="text-border">Nuestra agencia Chispas Oculto te ofrece paquetes por días adaptados a tus necesidades. 
            Disfruta de itinerarios diseñados para explorar lo mejor de cada destino, ya sea en escapadas cortas de 3 días o aventuras más largas de 7 días. 
            ¡Elige el paquete ideal y vive una experiencia única!
        </p>
    </div>

    <center>
    <table class="table paquetes">
        <?php 
        $counter = 0; // Contador para las filas
        foreach ($paquetes as $paquete): 
            if ($counter % 3 == 0) { 
                echo '<tr>'; // Inicia una nueva fila cada 3 elementos
            }
        ?>
            <td class="paquete-cell">
                <a href="<?php echo htmlspecialchars($paquete['url']); ?>">
                    <img src="<?php echo $paquete['imagen']; ?>" alt="<?php echo htmlspecialchars($paquete['Nombre']); ?>" class="paquete-imagen">
                    <h3 class="paquete-nombre"><?php echo htmlspecialchars($paquete['Nombre']); ?></h3>
                    <p class="descripcion"><?php echo htmlspecialchars($paquete['Descripcion']); ?></p>
                    <br>
                    <p class="pequeno"><b>$<?php echo number_format($paquete['Precio'], 2); ?></b></p>
                </a>

                <?php 
                // Verificar si el usuario está logueado y tiene id_rango == 1
                if (isset($_SESSION['id_rango']) && $_SESSION['id_rango'] == 1): ?>
                    <div class="acciones">
                        <a href="index.php?u=editar&id=<?php echo $paquete['id_catalogo']; ?>" class="btn btn-warning"><b>EDITAR</b></a>
                        <br>
                        <a href="index.php?u=eliminardato&id=<?php echo $paquete['id_catalogo']; ?>" class="btn btn-danger" 
                         onclick="return confirm('¿Estás seguro de que deseas eliminar este paquete?');"><b>ELIMINAR</b></a>
                        </div>
                <?php endif; ?>
            </td>
            <?php 
            $counter++; 
            if ($counter % 3 == 0) {
                echo '</tr>'; // Cierra la fila después de 3 elementos
            }
        endforeach;
        // Si el número de paquetes no es múltiplo de 3, cierra la última fila
        if ($counter % 3 != 0) {
            echo '</tr>';
        }
        ?>
    </table>
</center>

        

    <br>
 
    <br><br><br><br><br><br><br>
    
        <table class="piepagina" width="100%">
            <tr>
                <td width="15%">
                    <br><br><br>
                    <img src="./view/img/logo_chiapasoculto.png" class="img-fluid" alt="Logo Chiapas Oculto">
                    <br><br>
                </td>
                <td width="22%">
                    <center><h5>Servicio al Cliente</h5></center>
                    <a href="index.php?u=contacto"><ul class="custom-bullets"><li>Contacto</li></ul></a>
                    <a href="index.php?u=login"><ul class="custom-bullets"><li>Mi Cuenta</li></ul></a>
                </td>
                <td width="22%">
                    <center><h5>Tours Destacados</h5></center>
                    <a href="index.php?u=arcotete"><ul class="custom-bullets2"><li>El Arcote</li></ul></a>
                    <a href="index.php?u=lagunasmontebello"><ul class="custom-bullets2"><li>Lagunas de Montebello</li></ul></a>
                    <a href="index.php?u=palenque"><ul class="custom-bullets2"><li>Zona Arqueológica De Palenque</li></ul></a>
                    <a href="index.php?u=zonarqueologica"><ul class="custom-bullets2"><li>Zona Arqueológica De Tonina</li></ul></a>
                </td>
                <td width="22%">
                    <center><h5>Paquetes Destacados</h5></center>
                    <a href="index.php?u=arqueologiaselva"><ul class="custom-bullets2"><li>Arqueología y Selva</li></ul></a>
                    <a href="index.php?u=paraisoselva"><ul class="custom-bullets2"><li>Paraíso en la Selva</li></ul></a>
                    <a href="index.php?u=expedicionchiapaneca"><ul class="custom-bullets2"><li>Expedición Chiapaneca</li></ul></a>
                    <a href="index.php?u=rutasmchiapas"><ul class="custom-bullets2"><li>Rutas Mágicas de Chiapas</li></ul></a>
                </td>
                <td width="22%">
                    <br><br><br>
                    <a class="normal" href="https://www.google.com/maps/place/Salon+Gema/@16.7725603,-93.0872266,463m/data=!3m1!1e3!4m6!3m5!1s0x85ed275d3b624c83:0x4d25f42cb24d00ed!8m2!3d16.77325!4d-93.0885407!16s%2Fg%2F11gh0511bn?authuser=0&entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D">
                        <img src="./view/img/geolocalizacion.png" width="20%" alt="Icono de geolocalización">
                        Ver Ubicación
                    </a>
                </td>
            </tr>
        </table>

    <br><br>
    <?php require_once("./view/layout/footer.php");?>
    
</body>
</html>
