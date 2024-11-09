<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours Chiapas Oculto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Tours Chiapas</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
</head>

<body>
    <?php require_once("./view/layout/header.php");?>
    <br><br>

    <img src="./view/img/tour.png" class="img-fluid" alt="Tour Chiapas" width=100%>

    <br><br>

    <div class="container">
        <p class="text-border">En estos tours, disfrutarás de una experiencia inolvidable con la agencia Chiapas Oculto. 
            Te ofrecemos aventuras únicas llenas de emoción, exploración y momentos inolvidables. 
            ¡Prepárate para descubrir lo mejor del destino con nosotros!
        </p>
    </div>

    <br><br>

        <table class="table paquetes">
            <tr>
                <td><a href="index.php?u=cascadas"><img src="./view/img/p1.png" class="img-fluid" alt="Paquete 1"></a></td>
                <td><a href="index.php?u=cañon"><img src="./view/img/p2.png" class="img-fluid" alt="Paquete 2"></a></td>
                <td><a href="index.php?u=simacotorras"><img src="./view/img/p3.png" class="img-fluid" alt="Paquete 3"></a></td>
                <td><img src="./view/img/p4.png" class="img-fluid" alt="Paquete 4"></td>
            </tr>
            <tr>
                <td><img src="./view/img/5.png" class="img-fluid" alt="Paquete 5"></td>
                <td><img src="./view/img/7.png" class="img-fluid" alt="Paquete 6"></td>
                <td><img src="./view/img/6.png" class="img-fluid" alt="Paquete 7"></td>
                <td><img src="./view/img/8.png" class="img-fluid" alt="Paquete 8"></td>
            </tr>
        </table>
    
    <br>
    
        <table class="table paquetes1">
            <tr>
                <td><img src="./view/img/9.png" class="img-fluid" alt="Paquete 9"></td>
                <td><img src="./view/img/10.png" class="img-fluid" alt="Paquete 10"></td>
                <td><img src="./view/img/11.png" class="img-fluid" alt="Paquete 11"></td>
            </tr>
        </table>
    
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
                    <a href="contacto.php"><ul class="custom-bullets"><li>Contacto</li></ul></a>
                    <a href="login.php"><ul class="custom-bullets"><li>Mi Cuenta</li></ul></a>
                </td>
                <td width="22%">
                    <center><h5>Tours Destacados</h5></center>
                    <a href=""><ul class="custom-bullets2"><li>El Arcote</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Lagunas de Montebello</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Zona Arqueológica De Palenque</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Zona Arqueológica De Tonina</li></ul></a>
                </td>
                <td width="22%">
                    <center><h5>Paquetes Destacados</h5></center>
                    <a href=""><ul class="custom-bullets2"><li>Arqueología y Selva</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Paraíso en la Selva</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Expedición Chiapaneca</li></ul></a>
                    <a href=""><ul class="custom-bullets2"><li>Rutas Mágicas de Chiapas</li></ul></a>
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
    <?php require_once("./view/layout/footer.php");?>
    
</body>
</html>