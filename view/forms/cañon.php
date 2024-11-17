<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Cañón Del Sumidero</title>
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
                    <img src="view/img/CañonSumidero.jpg" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro">
                        <div style="margin-left: 40px;">
                            <h6>Inicio/Tour por Chiapas</h6>
                            <h2>Cañon Del Sumidero</h2>
                            <h5>$540.00</h5>
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
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 9:30 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>
                        <p><b>07:30 AM</b>- Recepción en el hotel de Tuxtla Gutiérrez
                            El conductor te recogerá en el hotel. Asegúrate de estar listo y con tus pertenencias necesarias para el día.</p>

                        <p><b>08:00 AM</b> - Salida hacia el embarcadero en Chiapa de Corzo
                            Emprende el viaje hacia Chiapa de Corzo, donde inicia la travesía al Cañón del Sumidero. Durante el camino, podrás disfrutar del hermoso paisaje.</p>

                        <p><b>08:30 AM</b> - Llegada a Chiapa de Corzo y embarque
                            Una vez en el embarcadero, recibirás instrucciones de seguridad. Después, abordarás la lancha para comenzar el recorrido por el Cañón del Sumidero.</p>

                        <p><b>09:00 AM</b>- Recorrido en lancha por el Cañón del Sumidero
                            Surca las aguas del río Grijalva y admira las imponentes paredes del cañón, que alcanzan hasta mil metros de altura. Durante el recorrido, podrás observar flora, fauna (como cocodrilos y aves), y formaciones naturales impresionantes como la "Cueva de Colores" y el "Árbol de Navidad".</p>

                        <p><b>11:00 AM</b>- Fin del recorrido en lancha y tiempo libre en Chiapa de Corzo
                            Una vez finalizado el paseo, tendrás tiempo para explorar el pintoresco pueblo de Chiapa de Corzo. Puedes visitar el centro histórico, tomar fotos en la fuente colonial o comprar artesanías locales.</p>

                        <p><b>12:30 PM</b>- Tiempo libre para el almuerzo (no incluido)
                            Disfruta de la comida típica chiapaneca en los restaurantes del centro de Chiapa de Corzo.</p>

                        <p><b>02:00 PM</b>- Salida de regreso a Tuxtla Gutiérrez
                            Reúnete con el grupo para regresar a Tuxtla Gutiérrez.</p>

                        <p><b>02:30 PM</b>- Llegada a Tuxtla Gutiérrez
                            El conductor te dejará en tu hotel para que puedas descansar después de un día lleno de descubrimientos.</p>


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
                        <img src="view/img/flecha_verde.png" width="20px"> Entradas al Parque Nacional
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Lancha compartida para el recorrido dentro del Cañón
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Conductor experimentado
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Seguro de viajero
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