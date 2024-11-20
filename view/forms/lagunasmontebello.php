<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Lagunas De Montebello</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">

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
<script src="view/js/cart.js"></script>

    <?php require_once("./view/layout/header.php"); ?>
    <br><br>

    <div class="separador">
    </div>

    <div class="table-responsive">
        <table width="100%" class="tabla_tours">
            <tr>
                <td>
                    <img src="view/img/Lagunasmontebello.jpg" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro">
                        <div style="margin-left: 40px;">
                            <h6>Inicio/Tour por Chiapas</h6>
                            <?php foreach ($paquetes as $paquete): ?>
                            <h2><?php echo htmlspecialchars($paquete['Nombre']); ?></h2>
                            <h5><b>$<?php echo number_format($paquete['Precio'], 2); ?></b></h5>
                            <?php endforeach; ?>
                            <h5>Por persona <br> Min. 2 personas <br> Max. 10 personas</h5>
                            <h5>Duracion: 1 dia</h5>
                            <br>
                            <h5>Fecha a reservar</h5>
                        </div>
                        <div class="counter-container">
                            <button class="counter-button" onclick="decrease()">−</button>
                            <span class="counter-value" id="counter">2</span>
                            <button class="counter-button" onclick="increase()">+</button>
                            <form action="index.php?u=agregarProductoAlCarrito">
                            <button class="btn1">
                                <p style="color: white;">AÑADIR AL CARRITO</p>
                            </button>
                            </form>
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
                        <img src="view/img/icono-mapa.png" width="70px"> Ubicación de salida: Tuxtla Gutiérrez Chiapas o San Cristóbal de las Casas
                        <br>
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 6:00 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>
                        <p><b>06:00 AM</b> - Recepción en el hotel de San Cristóbal de las Casas<br>
                            El conductor te recogerá en tu hotel para iniciar el recorrido. Lleva ropa cómoda, calzado adecuado para caminar, protector solar y suficiente agua.</p>

                        <p><b>06:30 AM</b> - Salida hacia el Parque Nacional Lagunas de Montebello<br>
                            Iniciamos el viaje hacia el parque, ubicado al sur de Chiapas, en la frontera con Guatemala. Durante el trayecto, disfruta de las vistas de la selva y montañas de la región.</p>

                        <p><b>10:00 AM</b> - Llegada a las Lagunas de Montebello<br>
                            Al llegar, recibirás una breve introducción sobre el parque y su diversidad natural. Este lugar cuenta con más de 50 lagunas de diferentes colores, que van desde el azul turquesa hasta el verde esmeralda.</p>

                        <p><b>10:30 AM</b> - Recorrido por las principales lagunas<br>
                            Explora las lagunas más famosas, como Laguna Encantada, Laguna Esmeralda y Laguna Bosque Azul. Un guía te llevará a los puntos de observación, donde podrás admirar los colores únicos de cada lago y la vegetación circundante.</p>

                        <p><b>12:30 PM</b> - Tiempo libre para explorar y tomar fotos<br>
                            Disfruta de tiempo para recorrer el lugar a tu propio ritmo, tomar fotografías y explorar los senderos. Si lo deseas, puedes alquilar una balsa artesanal en algunas de las lagunas para tener una experiencia más cercana al agua.</p>

                        <p><b>01:30 PM</b> - Almuerzo (no incluido)<br>
                            Aprovecha para disfrutar de un almuerzo en alguno de los restaurantes locales dentro del parque o en los alrededores. También puedes llevar un almuerzo empacado para disfrutarlo en el área de picnic.</p>

                        <p><b>02:30 PM</b> - Visita a la Laguna Internacional<br>
                            Dirígete a la Laguna Internacional, una laguna que se encuentra en la frontera entre México y Guatemala. Podrás observar el límite entre los dos países y apreciar la belleza natural que comparten.</p>

                        <p><b>03:30 PM</b> - Tiempo para relajarse y última oportunidad de fotos<br>
                            Tómate un momento para relajarte y disfrutar del paisaje antes de regresar. Esta es una buena oportunidad para tomar fotos finales de las lagunas y del entorno natural.</p>

                        <p><b>04:00 PM</b> - Salida de regreso a San Cristóbal de las Casas<br>
                            Reúnete con el grupo para comenzar el viaje de regreso, después de un día lleno de paisajes impresionantes y momentos de tranquilidad en la naturaleza.</p>

                        <p><b>08:00 PM</b> - Llegada a San Cristóbal de las Casas<br>
                            El conductor te dejará en tu hotel para que puedas descansar y reflexionar sobre la belleza de las lagunas que visitaste.</p>

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
    <?php require_once("./view/layout/footer.php"); ?>

</body>

</html>