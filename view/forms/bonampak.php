<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Bonampak</title>
</head>

<script>
    let count = 2;

    function increase() {
        if (count < 10) {
            count++;
            document.getElementById('counter').innerText = count;
        }
    }

    function decrease() {
        if (count > 2) {
            count--;
            document.getElementById('counter').innerText = count;
        }
    }
</script>

<body>
    <?php require_once("./view/layout/header.php"); ?>
    <br><br>

    <div class="separador">
    </div>

    <div class="table-responsive">
        <table width="100%" class="tabla_tours">
            <tr>
                <td>
                    <img src="view/img/Bonampak.jpg" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro">
                        <div style="margin-left: 40px;">
                            <h6>Inicio/Tour por Chiapas</h6>
                            <h2>Bonampak</h2>
                            <h5>$1,250.00</h5>
                            <h5>Por persona <br> Min. 2 personas <br> Max. 10 personas</h5>
                            <h5>Duracion: 1 dia</h5>
                            <br>
                            <h5>Fecha a reservar</h5>
                        </div>
                        <div class="counter-container">
                            <button class="counter-button" onclick="decrease()">−</button>
                            <span class="counter-value" id="counter">2</span>
                            <button class="counter-button" onclick="increase()">+</button>
                            <button class="btn1">
                                <p style="color: white;">AÑADIR AL CARRITO</p>
                            </button>
                        </div>
                        <br>
                        <center>
                            <button class="btn2">
                                <img src="view/img/logo_whats.png" width="30px"> Resolver tus dudas
                            </button>
                            <br>
                            <img src="view/img/visa-mastercard.png" width="150px">
                            <img src="view/img/mercadopago.png" width="150px">
                        </center>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="tabla_contenido">
        <table width="90%">
            <tr>
                <td>
                    <p class="letras">Descipción</p>
                    <div class="textos">
                        <img src="view/img/icono-mapa.png" width="70px"> Ubicación de salida: Tuxtla Gutiérrez Chiapas
                        <br>
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 3:00 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p> 
                    </div>

                </td>
                <td>
                    <div class="recuadro2">
                        <center>
                            <h3 style="color: #2AB7CA;">Incluye</h3>
                        </center>
                        <img src="view/img/flecha_verde.png" width="20px"> Transportación turística en servicio grupal o compartido
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Recepción en hotel de Tuxtla Gutiérrez
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Entradas s a todos los sitios turísticos
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Conductor experimentado.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Seguro de viajero a bordo de la unidad.
                    </div>
                    <br>
                    <div class="recuadro3">
                        <center>
                            <h3 style="color: #2AB7CA;">No incluye</h3>
                        </center>
                        <img src="view/img/incono-equis.png" width="20px"> Alimentos
                        <br>
                        <img src="view/img/incono-equis.png" width="20px"> Servicios no especificados
                    </div>
                </td>
            </tr>
        </table>
    </div>
    
    <br><br><br><br>
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