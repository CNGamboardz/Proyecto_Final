<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Arco del Tiempo de Cintalapa</title>
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


    <?php require_once("./view/layout/header.php"); ?>
    <br><br>

    <div class="separador">
    </div>

    <div class="table-responsive">
        <table width="100%" class="tabla_tours">
            <tr>
                <td>
                    <img src="view/img/ArcotiempoCinta.webp" alt="" class="img-fluid" width="845px" height="525px">
                </td>
                <td>
                    <div class="recuadro">
                        <form id="arcocintalapa">
                            <div style="margin-left: 40px;">
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
                            </div>
                            <div class="counter-container">
                                <button type="button" class="counter-button" onclick="decrease()">−</button>
                                <span class="counter-value" id="counter">2</span>
                                <button type="button" class="counter-button" onclick="increase()">+</button>
                                <form action="index.php?u=agregarProductoAlCarrito">
                                    <button type="button" class="btn_carrito" data-id="arcocintalapa">
                                        <p style="color: white;">AÑADIR AL CARRITO</p>
                                    </button>
                                </form>
                            </div>
                        </form>

                        <script>
                            // Obtener el precio del paquete (guardado en el input oculto)
                            const precioUnitario = parseFloat(document.getElementById('precio').value);
                            let count = 2; // Valor inicial del contador

                            // Función para aumentar la cantidad
                            function increase() {
                                if (count < 10) { // Limita el máximo a 10
                                    count++;
                                    document.getElementById('counter').innerText = count;
                                    updatePrice(); // Actualiza el precio total
                                }
                            }

                            // Función para disminuir la cantidad
                            function decrease() {
                                if (count > 2) { // Limita el mínimo a 2
                                    count--;
                                    document.getElementById('counter').innerText = count;
                                    updatePrice(); // Actualiza el precio total
                                }
                            }

                            // Actualiza el precio total según la cantidad
                            function updatePrice() {
                                const totalPrice = precioUnitario * count;
                                document.getElementById('totalPrice').innerText = formatNumber(totalPrice); // Muestra el precio con comas
                            }

                            // Función para formatear el número con comas
                            function formatNumber(number) {
                                return number.toLocaleString('en-US', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });
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
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 8:00 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>
                        <p><b>07:00 AM</b> - Recepción en el hotel de Tuxtla Gutiérrez<br>
                            El conductor te recogerá en tu hotel para iniciar el recorrido. Lleva ropa cómoda, calzado adecuado para caminar y protector solar. Prepárate para una aventura de ecoturismo y exploración.</p>

                        <p><b>07:30 AM</b> - Salida hacia el Arco del Tiempo<br>
                            Iniciamos el viaje hacia Cintalapa, Chiapas, donde se encuentra el Arco del Tiempo. El trayecto dura aproximadamente 1 hora y 30 minutos. Durante el camino, podrás disfrutar del paisaje montañoso y rural de la región.</p>

                        <p><b>09:00 AM</b> - Llegada al Arco del Tiempo<br>
                            Al llegar, recibirás una breve introducción sobre el lugar y su formación geológica. El Arco del Tiempo es un puente natural formado por la erosión del agua a lo largo de millones de años, creando un fenómeno natural único en la zona.</p>

                        <p><b>09:30 AM</b> - Caminata y exploración del Arco del Tiempo<br>
                            Comienza el recorrido por el sendero que te llevará hasta el impresionante Arco del Tiempo. Explora los alrededores y admira la majestuosidad de la roca que ha sido moldeada por el paso del tiempo. Podrás caminar bajo el arco y tomar fotos espectaculares.</p>

                        <p><b>10:30 AM</b> - Observación del paisaje natural<br>
                            Disfruta de la vista panorámica desde el arco y explora los alrededores. El área está rodeada de vegetación tropical y montañas, lo que hace de este lugar un excelente sitio para la observación de la naturaleza y la fotografía.</p>

                        <p><b>11:00 AM</b> - Tiempo libre para explorar más del área<br>
                            Tendrás tiempo libre para caminar por los senderos cercanos, observar la fauna local, o relajarte en el entorno natural. Este es el momento perfecto para conectar con la naturaleza y disfrutar de la tranquilidad del lugar.</p>

                        <p><b>12:00 PM</b> - Almuerzo (no incluido)<br>
                            Aprovecha para disfrutar de un almuerzo en un restaurante local de Cintalapa o en un área de picnic cercana. Puedes llevar tu comida o probar platillos tradicionales chiapanecos.</p>

                        <p><b>01:00 PM</b> - Regreso al Arco del Tiempo para fotos adicionales<br>
                            Antes de regresar, tendrás la oportunidad de tomar más fotos y explorar nuevamente la zona del Arco. Este es el último momento para capturar la belleza de este fenómeno geológico.</p>

                        <p><b>02:00 PM</b> - Salida de regreso a Tuxtla Gutiérrez<br>
                            Reúnete con el grupo para iniciar el viaje de regreso a Tuxtla Gutiérrez. Disfruta del paisaje durante el trayecto y relájate tras un día lleno de aventuras.</p>

                        <p><b>03:30 PM</b> - Llegada a Tuxtla Gutiérrez<br>
                            El conductor te dejará en tu hotel para que puedas descansar y reflexionar sobre la experiencia vivida en este increíble lugar natural.</p>

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
                <center>
                    <h5>Servicio al Cliente</h5>
                </center>
                <a href="index.php?u=contacto">
                    <ul class="custom-bullets">
                        <li>Contacto</li>
                    </ul>
                </a>
                <a href="index.php?u=login">
                    <ul class="custom-bullets">
                        <li>Mi Cuenta</li>
                    </ul>
                </a>
            </td>
            <td width="22%">
                <center>
                    <h5>Tours Destacados</h5>
                </center>
                <a href="index.php?u=arcotete">
                    <ul class="custom-bullets2">
                        <li>El Arcote</li>
                    </ul>
                </a>
                <a href="index.php?u=lagunasmontebello">
                    <ul class="custom-bullets2">
                        <li>Lagunas de Montebello</li>
                    </ul>
                </a>
                <a href="index.php?u=palenque">
                    <ul class="custom-bullets2">
                        <li>Zona Arqueológica De Palenque</li>
                    </ul>
                </a>
                <a href="index.php?u=zonarqueologica">
                    <ul class="custom-bullets2">
                        <li>Zona Arqueológica De Tonina</li>
                    </ul>
                </a>
            </td>
            <td width="22%">
                <center>
                    <h5>Paquetes Destacados</h5>
                </center>
                <a href="index.php?u=arqueologiaselva">
                    <ul class="custom-bullets2">
                        <li>Arqueología y Selva</li>
                    </ul>
                </a>
                <a href="index.php?u=paraisoselva">
                    <ul class="custom-bullets2">
                        <li>Paraíso en la Selva</li>
                    </ul>
                </a>
                <a href="index.php?u=expedicionchiapaneca">
                    <ul class="custom-bullets2">
                        <li>Expedición Chiapaneca</li>
                    </ul>
                </a>
                <a href="index.php?u=rutasmchiapas">
                    <ul class="custom-bullets2">
                        <li>Rutas Mágicas de Chiapas</li>
                    </ul>
                </a>
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
    <script src="view/js/cart.js"></script>

</body>

</html>