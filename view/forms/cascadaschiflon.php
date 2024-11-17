<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Centro Ecoturistico Cascadas el Chiflón</title>
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
                    <img src="view/img/Cascadaschiflon.jpg" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro">
                        <div style="margin-left: 40px;">
                            <h6>Inicio/Tour por Chiapas</h6>
                            <h2>Centro Ecoturistico Cascadas el Chiflón</h2>
                            <h5>$900.00</h5>
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
                        <img src="view/img/icono-mapa.png" width="70px"> Ubicación de salida: Tuxtla Gutiérrez Chiapas o San Cristóbal de las Casas
                        <br>
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 6:00 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>
                        <p><b>07:00 AM</b> - Recepción en el hotel de San Cristóbal de las Casas<br>
                            El conductor te recogerá en tu hotel para iniciar el recorrido. Lleva ropa cómoda, zapatos adecuados para caminar, protector solar, repelente para insectos y suficiente agua.</p>

                        <p><b>07:30 AM</b> - Salida hacia El Chiflón<br>
                            Iniciamos el viaje hacia el Centro Ecoturístico Cascadas El Chiflón, ubicado en el municipio de Tzimol, Chiapas. Durante el trayecto, disfruta de las vistas de montañas y vegetación de la región.</p>

                        <p><b>10:00 AM</b> - Llegada a las Cascadas El Chiflón<br>
                            Al llegar, recibirás una breve introducción sobre el lugar y las distintas cascadas que podrás visitar. El sitio cuenta con senderos bien señalizados que te guiarán hasta las cascadas principales.</p>

                        <p><b>10:30 AM</b> - Caminata hacia las cascadas<br>
                            Comienza la caminata por el sendero que lleva a las distintas cascadas, pasando por "El Suspiro", "Ala de Ángel", y "Arcoíris". El camino te llevará hasta la impresionante cascada principal, "Velo de Novia", una caída de agua de más de 120 metros.</p>

                        <p><b>11:30 AM</b> - Tiempo libre en la cascada Velo de Novia<br>
                            Tómate un momento para admirar la majestuosidad de la cascada Velo de Novia. Puedes relajarte en la orilla, disfrutar de la brisa refrescante, y tomar fotos de las vistas panorámicas.</p>

                        <p><b>12:00 PM</b> - Opcional: Actividades de aventura<br>
                            Para quienes buscan algo de aventura, hay actividades adicionales como tirolesa y renta de balsas en ciertas áreas del centro ecoturístico (costo adicional). La tirolesa ofrece una vista única de las cascadas y el río.</p>

                        <p><b>01:00 PM</b> - Almuerzo (no incluido)<br>
                            Disfruta de un almuerzo en alguno de los restaurantes locales dentro del centro ecoturístico o en las áreas de picnic, si decides llevar comida empacada. Aprovecha para relajarte antes de continuar explorando.</p>

                        <p><b>02:00 PM</b> - Tiempo libre para explorar y tomar fotos<br>
                            Recorre a tu propio ritmo el resto del centro ecoturístico. Podrás visitar áreas de miradores, tomar fotos, o descansar junto a las pozas de agua cristalina del río.</p>

                        <p><b>03:00 PM</b> - Salida de regreso a San Cristóbal de las Casas<br>
                            Reúnete con el grupo para iniciar el regreso a San Cristóbal, después de un día lleno de naturaleza y aventura en El Chiflón.</p>

                        <p><b>06:00 PM</b> - Llegada a San Cristóbal de las Casas<br>
                            El conductor te dejará en tu hotel, donde podrás descansar y recordar las vistas y experiencias vividas en este increíble lugar natural.</p>


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