<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    <title>Chiapas Oculto</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
</head>

<body>

    <?php require_once("./view/layout/header.php");?>
    <img src="./view/img/banner.png" class="img-fluid" alt="Banner Chiapas Oculto" width=100%>

    <br>
    <br>
    <h1>Nuestro objetivo</h1>
    <br>
    <p class="parrafo">
        Nuestro objetivo es posicionar a Chiapas como un destino líder en turismo alternativo, ofreciendo experiencias únicas 
        que conecten a los viajeros con la riqueza natural, cultural y espiritual de la región. A través de nuestra plataforma 
        Chiapas Oculto, facilitaremos el acceso a rutas de lugares y actividades exclusivas, promoviendo un turismo sostenible 
        y responsable que beneficie tanto a las comunidades locales como al medio ambiente.
    </p>

    <br>
    <div class="separador"></div>

    <div class="row">
        <div class="col-md-6">
            <br><br><br>
            <center><h1>Visión</h1></center>
            <br>
            <p class="parrafo">
                Ser la agencia de viajes líder en ofrecer experiencias auténticas y personalizadas en los rincones más desconocidos y 
                mágicos de Chiapas, conectando a los viajeros con la riqueza natural, 
                cultural y ancestral de la región, y promoviendo el turismo responsable y sostenible.
            </p>
        </div>
        <div class="col-md-6">
            <br><br>
            <center><h1>Misión</h1></center>
            <br>
            <p class="parrafo3">
                Brindar a nuestros clientes experiencias inolvidables al descubrir los tesoros ocultos de Chiapas, 
                con servicios de alta calidad y guiados por expertos locales. Nos comprometemos a proteger el patrimonio cultural y natural, 
                fomentar la economía local y garantizar que cada viaje contribuya al desarrollo sostenible de las comunidades que visitamos.
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="separador"></div>
    <br><br>
    <h1>Los mejores Tours por Chiapas</h1>
    <br>

    <center>
    <table class="table paquetes">
        <?php 
        $counter = 0; // Contador para las filas
        foreach ($paquetes as $paquete): 
            if ($counter >= 3) { 
                break; // Detiene el bucle después de 3 elementos
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
                        <a href="editar_paquete.php?id=<?php echo $paquete['id_catalogo']; ?>" class="btn btn-warning"><b>EDITAR</b></a>
                        <br>
                        <a href="index.php?u=eliminardato&id=<?php echo $paquete['id_catalogo']; ?>" class="btn btn-danger" 
                         onclick="return confirm('¿Estás seguro de que deseas eliminar este tour?');"><b>ELIMINAR</b></a>
                        </div>
                <?php endif; ?>
            </td>
            <?php 
            $counter++; 
            if ($counter % 3 == 0) {
                echo '</tr>'; // Cierra la fila después de 3 elementos
            }
        endforeach;
        ?>
    </table>
</center>

<a href="index.php?u=tours" class="boton"><b>VER TODOS LOS TOURS</b></a>

    <br>
    <br>
    <h1>Los mejores Paquetes por Chiapas</h1>
    <br>
    

    <center>
    <table class="table paquetes">
        <?php 
        $counter = 0; // Contador para las filas
        foreach ($tours as $paquete): 
            if ($counter >= 3) { 
                break; // Detiene el bucle después de 3 elementos
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
        ?>
    </table>
</center>

<a href="index.php?u=paquetes" class="boton"><b>VER TODOS LOS PAQUETES</b></a>

    <br><br><br><br><br>

    <?php require_once("./view/layout/footer.php");?>
</body>
</html>