<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Expedición Chiapaneca</title>
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
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="view/img/CañonSumidero.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="view/img/Arcotete.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </td>

                <td>
                    <div class="recuadro">
                        <form id="expedicionchiapaneca">
                            <div style="margin-left: 40px;">
                                <h6>Inicio/Tour por Chiapas</h6>
                                <?php foreach ($paquetes as $paquete): ?>
                                    <h2><?php echo htmlspecialchars($paquete['Nombre']); ?></h2>
                                    <h5><b>$<?php echo number_format($paquete['Precio'], 2); ?></b></h5>
                                    <input type="hidden" id="precio" name="precio" value="<?php echo htmlspecialchars($paquete['Precio']); ?>">
                                    <input type="hidden" id="nombre" name="nombre" value="<?php echo htmlspecialchars($paquete['Nombre']); ?>">
                                <?php endforeach; ?>
                                <h5>Por persona <br> Min. 2 personas
                                    <h5>Numero de Días: 4 dia / 3 noches</h5>
                                    <br>
                                    <h5>Fecha a reservar</h5>
                            </div>
                            <div class="counter-container">
                                <button type="button" class="counter-button" onclick="decrease()">−</button>
                                <span class="counter-value" id="counter">2</span>
                                <button type="button" class="counter-button" onclick="increase()">+</button>
                                <form action="index.php?u=agregarProductoAlCarrito">
                                    <button type="button" class="btn_carrito" data-id="expedicionchiapaneca">
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
                        <img src="view/img/icono-reloj.png" width="70px"> Hora de salida: 7:30 am
                    </div>
                    <div class="itinerario">
                        <p class="letras">Itinerario</p>

                        <h4 style="color: #336ca5;">Día 1</h4>
                        <p>
                            <b>07:30 AM</b> - Recepción en el aeropuerto o tu hotel en Tuxtla Gutiérrez
                            El conductor te dará la bienvenida y confirmará los detalles del itinerario.
                        </p>
                        <p>
                            <b>08:30 AM</b> - Tour en lancha por el Cañón del Sumidero
                            Recorre el majestuoso cañón y admira sus imponentes paredes, fauna local como cocodrilos y monos, y sitios emblemáticos como el "Árbol de Navidad".
                        </p>
                        <p>
                            <b>11:00 AM</b> - Visita a Chiapa de Corzo
                            Explora este pintoresco pueblo mágico, famoso por su fuente colonial y su rica historia.
                        </p>
                        <p>
                            <b>01:00 PM</b> - Almuerzo (no incluido)
                            Prueba platillos típicos como el cochito horneado en los restaurantes locales.
                        </p>
                        <p>
                            <b>02:30 PM</b> - Traslado a San Cristóbal de las Casas
                            Disfruta del recorrido hacia los Altos de Chiapas con hermosos paisajes en el camino.
                        </p>
                        <p>
                            <b>04:30 PM</b> - Registro en el hotel en San Cristóbal de las Casas
                            Tiempo libre para explorar el centro histórico.
                        </p>
                        <p>
                            <b>07:00 PM</b> - Cena (por cuenta propia)
                            Recomendación: tamales chiapanecos o sopa de chipilín.
                        </p>

                        <h4 style="color: #336ca5;">Día 2</h4>
                        <p>
                            <b>07:00 AM</b> - Desayuno tradicional en el hotel
                        </p>
                        <p>
                            <b>08:30 AM</b> - Visita a El Arcotete
                            Explora este parque ecológico, camina por senderos naturales y descubre el impresionante arco de piedra formado por la naturaleza.
                        </p>
                        <p>
                            <b>12:00 PM</b> - Almuerzo (no incluido)
                            Disfruta de un almuerzo ligero en el área de recreación.
                        </p>
                        <p>
                            <b>02:00 PM</b> - Tarde libre en San Cristóbal de las Casas
                            Recorre los mercados de artesanías, museos y la iglesia de Santo Domingo.
                        </p>
                        <p>
                            <b>07:00 PM</b> - Cena (por cuenta propia)
                            Recomendación: prueba el café de Chiapas y los postres locales.
                        </p>

                        <h4 style="color: #336ca5;">Día 3</h4>
                        <p>
                            <b>07:00 AM</b> - Desayuno tradicional en el hotel
                        </p>
                        <p>
                            <b>09:00 AM</b> - Tour por los alrededores de San Cristóbal
                            Visita las comunidades indígenas de San Juan Chamula y Zinacantán, donde aprenderás sobre sus tradiciones y cultura.
                        </p>
                        <p>
                            <b>01:00 PM</b> - Almuerzo (no incluido)
                            Disfruta de comida tradicional en un restaurante de la región.
                        </p>
                        <p>
                            <b>02:30 PM</b> - Traslado a Tuxtla Gutiérrez
                            Relájate durante el trayecto hacia la ciudad capital.
                        </p>
                        <p>
                            <b>04:00 PM</b> - Registro en el hotel en Tuxtla Gutiérrez
                            Tarde libre para pasear por el Parque de la Marimba o el centro de la ciudad.
                        </p>

                        <h4 style="color: #336ca5;">Día 4</h4>
                        <p>
                            <b>07:00 AM</b> - Desayuno tradicional en el hotel
                        </p>
                        <p>
                            <b>08:30 AM</b> - Traslado al aeropuerto o punto de origen
                            Fin del recorrido.
                        </p>
                    </div>


                </td>
                <td>
                    <div class="recuadro2_1">
                        <center>
                            <h3 style="color: #2AB7CA;">Incluye</h3>
                        </center>
                        <img src="view/img/flecha_verde.png" width="20px"> 2 noches de hospedaje en San Cristobal de las Casas.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> 1 noches de hospedaje en Tuxtla Gutiérrez.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> 4 desayunos típicos de la región por persona.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Atención personalizada 24/7.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Conductor experimentado y seguro para traslados entre los destinos turísticos.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Entradas a todas las zonas turísticas.
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Seguro de viajero durante el recorrido y las actividades
                        <br>
                        <img src="view/img/flecha_verde.png" width="20px"> Medidas sanitarias completas para una experiencia segura.
                    </div>
                    <br>
                    <div class="recuadro3">
                        <center>
                            <h3 style="color: #2AB7CA;">No incluye</h3>
                        </center>
                        <img src="view/img/incono-equis.png" width="20px"> Vuelos
                        <br>
                        <img src="view/img/incono-equis.png" width="20px"> Propinas al operador. (Opcional)
                        <br>
                        <img src="view/img/incono-equis.png" width="20px"> Cualquier otro servicio no especificado en el apartado “incluye”.
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