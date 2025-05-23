<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Cascadas de Agua Azul</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">
    </script>
</head>

<body>
    <?php require_once("./view/layout/header.php"); ?>
    <br><br>

    <div class="separador">
    </div>

    <div class="table-responsive">
        <table width="100%" class="tabla_tours">
            <tr>
                <td>
                    <img src="view/img/Cascadas.jpg" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro12">
                        <div style="margin-left: 40px;">
                            <form id="cascada">
                            <h6>Inicio/Tour por Chiapas</h6>
                            <?php foreach ($paquetes as $paquete): ?>
                                <h2><?php echo htmlspecialchars($paquete['Nombre']); ?></h2>
                                <h5><b>$<?php echo number_format($paquete['Precio'], 2); ?></b></h5>
                                <input type="hidden" id="precio" name="precio" value="<?php echo htmlspecialchars($paquete['Precio']); ?>">
                                <input type="hidden" id="nombre" name="nombre" value="<?php echo htmlspecialchars($paquete['Nombre']); ?>">
                                <?php endforeach; ?>
                                <h5>Por persona <br> Min. 2 personas <br> Max. 10 personas</h5>
                            <h5>Duracion: 1 dia</h5>
                            <br>
                            <h5>Fecha a reservar</h5>

                            <div class="counter-container">
                                <button type="button" class="counter-button" onclick="decrease()">−</button>
                                <span class="counter-value" id="counter">2</span>
                                <button type="button" class="counter-button" onclick="increase()">+</button>
                                <!-- <form action="index.php?u=agregarProductoAlCarrito"> -->
                                    <button type="button" class="btn_carrito" data-id="cascada">
                                        <p style="color: white;">AÑADIR AL CARRITO</p>
                                    </button>
                                <!-- </form> -->
                            </div>
                            </form>
                        </div>

                        <script>
                        // Obtener el precio del paquete (guardado en el input oculto)
                        const precioUnitario = parseFloat(document.getElementById('precio').value);
                        let count = 2;  // Valor inicial del contador

                        // Función para aumentar la cantidad
                        function increase() {
                            if (count < 10) {  // Limita el máximo a 10
                                count++;
                                document.getElementById('counter').innerText = count;
                                updatePrice();  // Actualiza el precio total
                            }
                        }

                        // Función para disminuir la cantidad
                        function decrease() {
                            if (count > 2) {  // Limita el mínimo a 2
                                count--;
                                document.getElementById('counter').innerText = count;
                                updatePrice();  // Actualiza el precio total
                            }
                        }

                        // Actualiza el precio total según la cantidad
                        function updatePrice() {
                            const totalPrice = precioUnitario * count;
                            document.getElementById('totalPrice').innerText = formatNumber(totalPrice); // Muestra el precio con comas
                        }

                        // Función para formatear el número con comas
                        function formatNumber(number) {
                            return number.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                        }

                        // Llamar a la función para mostrar el precio inicial al cargar la página
                        updatePrice();
                    </script>

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
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 7:30 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>
                        <p>
                            <b>07:30 AM</b> - Recepción en el hotel de Tuxtla Gutiérrez
                            El conductor experimentado te recogerá en tu hotel. Asegúrate de estar listo para salir a tiempo.
                        </p>
                        <p>
                            <b>08:00 AM</b> - Salida hacia las Cascadas de Agua Azul
                            Comienza el viaje en transporte turístico compartido. Durante el trayecto, podrás disfrutar del hermoso paisaje chiapaneco.
                        </p>

                        <p>
                            <b>09:00 AM</b> - Llegada a las Cascadas de Agua Azul
                            Al llegar, recibirás una breve introducción sobre el lugar y tendrás tiempo para tomar algunas fotos de las impresionantes vistas.
                        </p>

                        <p>
                            <b>09:30 AM</b> - Tiempo libre para disfrutar de las Cascadas
                            Explora a tu ritmo. Camina por los senderos, admira las cascadas y, si lo deseas, refréscate en las pozas de agua cristalina.
                        </p>

                        <p>
                            <b>11:30 AM</b> - Tiempo libre para el almuerzo (no incluido)
                            Aprovecha este momento para descansar y disfrutar de la comida. Puedes llevar un almuerzo empacado o comprar algo en los restaurantes locales.
                        </p>

                        <p>
                            <b>12:30 PM</b> - Continuación de la visita a las Cascadas
                            Sigue explorando las diferentes secciones de las cascadas. Cada rincón ofrece una vista espectacular, así que no olvides tu cámara.
                        </p>

                        <p>
                            <b>02:30 PM</b> - Salida hacia Tuxtla Gutiérrez
                            Reúnete con el grupo y comienza el regreso al hotel.
                        </p>

                        <p>
                            <b>04:30 PM</b> - Llegada a Tuxtla Gutiérrez
                            Finaliza el recorrido. El conductor te dejará en tu hotel, donde podrás descansar después de un día lleno de aventuras.
                        </p>
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
                        <img src="view/img/flecha_verde.png" width="20px"> Entradas a todos los sitios turísticos
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Seguro de viajero a bordo de la unidad.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Conductor experimentado
                    </div>
                    <br>
                    <div class="recuadro3">
                        <center>
                            <h3 style="color: #2AB7CA;">No incluye</h3>
                        </center>
                        <img src="view/img/incono-equis.png" width="20px"> Alimentos
                        <br>
                        <img src="view/img/incono-equis.png" width="20px"> Servicios no especificados
                        <br>
                        <img src="view/img/incono-equis.png" width="20px"> Guías en zona arqueológica (pago no obligatorio)
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <script src="view/js/cart.js"></script>

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
</body>

</html>