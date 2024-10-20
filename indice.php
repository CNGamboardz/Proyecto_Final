<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiapas Oculto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
    <title>Chiapas Oculto</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
</head>

<body>

    <?php require_once("./view/layout/header.php");?>

    <br><br>
    <img src="./view/img/banner.png" width="100%" height="100%">

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
    <div class="separador">
    </div>

    <table width ="100%">
        <tr>
            <td width="50%">
                <br><br><br>
            <center><h1>Visión</h1></center>
            <br>
            <p class="parrafo">
            Ser la agencia de viajes líder en ofrecer experiencias auténticas y personalizadas en los rincones más desconocidos y 
            mágicos de Chiapas, conectando a los viajeros con la riqueza natural, 
            cultural y ancestral de la región, y promoviendo el turismo responsable y sostenible.
            </p>
            </td>
            <td width="55%">
                <br><br>
                <center><h1>Misión</h1></center>
                <br>
                <p class="parrafo3">
                Brindar a nuestros clientes experiencias inolvidables al descubrir los tesoros ocultos de Chiapas, 
                con servicios de alta calidad y guiados por expertos locales. Nos comprometemos a proteger el patrimonio cultural y natural, 
                fomentar la economía local y garantizar que cada viaje contribuya al desarrollo <br> sostenible de las comunidades que visitamos.
            </p>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <div class="separador">
    </div>
    <br><br>
    <h1>Los mejores Tours por Chiapas</h1>
    <br>
    <table width="100%" class="tabla_tours">
        <tr> 
            <td><img src="view/img/p1.png" alt="" width="360px" height="370px"></td>
            <td><img src="view/img/p2.png" alt="" width="360px" height="370px"></td>
            <td><img src="view/img/p3.png" alt="" width="360px" height="370px"></td>
        </tr>
        <tr>
            <td>
              <a href="tours.php" class="boton"><b>VER TODOS LOS TOURS</b></a>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <h1>Los mejores Paquetes por Chiapas</h1>
    <br>
    <table width="100%" class="tabla_paquetes">
        <tr> 
            <td><img src="view/img/20.png" alt="" width="360px" height="370px"></td>
            <td><img src="view/img/19.png" alt="" width="360px" height="370px"></td>
            <td><img src="view/img/13.png" alt="" width="360px" height="370px"></td>
        </tr>
        <tr>
            <td>
                 <a href="paquetes.php" class="boton"><b>VER TODOS LOS PAQUETES</b></a>
            </td>
        </tr>
    </table>
    <br><br><br><br><br>

    <?php require_once("./view/layout/footer.php");?>
</body>
</html>