<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Carrito Chiapas Oculto</title>
    <link rel="icon" href="/view/img/Icon_logo.png" type="image/x-icon">

</head>

    <script>
       let cantidadProductos = 0;

        function agregarProducto() {
            cantidadProductos++;
            document.getElementById("cantidad").textContent = cantidadProductos;

            // Calcula el nuevo tamaño del recuadro según la cantidad de productos
            let nuevoAlto = 18.75 + (cantidadProductos * 1.5); // Aumenta la altura de 1.5rem por cada producto
            document.getElementById("carrito").style.height = `${nuevoAlto}rem`;
        }

    </script>


<body>
    <?php require_once("./view/layout/header.php"); ?>
    <br><br>
    <div class="separador">
    </div>
    <br>
    <div class="rectangle">
        <center><br>
            <h3><b><span class="subrayado">CARRITO</span> &rarr;   PAGAR  &rarr;   PEDIDO REALIZADO</b></h3>
        </center><br>
    </div>

    <br>
    <div class="table-responsive">
    <center><table width=95%>
        <tr width ="50%">
            <td width="50%">
            <p><b>PRODUCTO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRECIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CANTIDAD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBTOTAL</b></p>
            <hr width ="95%">
            <p>hola</p>
            <hr width ="95%">
            <br><br><br><br><br><br><br><br><br>
            </td>

            <td width="20%">
            <div class="recuadrocarrito">
                        <div style="margin-left: 40px;">
                            <center><h2>TOTAL DE CARRITO</h2></center>
                            <br><br>
                            <p><b>SUBTOTAL: </b></p>
                            <p><b>IVA 16%:</b></p>
                            <hr>
                            <p><b>TOTAL: </b></p>
                        </div>
                        
                        <div class="counter-container">
                            <button class="btn4">
                            <a href="index.php?u=pago">
                                <center><p style="color: white;">FINALIZAR COMPRA</p></center>
                            </button>
                        </a>
                        </div>

            </td>
        </tr>
    </table></center>
    </div>




    <br><br><br>

    <div class="rectangle2">
        <center>
        <table width= 90%>
            <tr width = 80%>
                <td width = "25%">
                    <center><img src="view/img/carrito_escudo.png" width="25%"></center>
                    <center><h5>COMPRA SEGURA</h5></center>
                    <center><h7>Con Licencia de <br>Seguridad</h7></center>

                </td>

                <td width = "25%">
                <center><img src="view/img/compras_linea.png" width="25%"></center><br>
                <center><h5>COMPRA EN LÍNEA</h5></center>
                <center><h7>Reserva Segura</h7></center>
                </td>

                <td width = "25%">
                <center><img src="view/img/maleta.png" width="25%"></center>
                <center><h5>LOS MEJORES LUGARES <br>
                DE CHIAPAS</h5></center>
                <center><h7>Conoce lo mejor <br>
                de Chiapas</h7></center>
                </td>

                <td width = "25%">
                <center><img src="view/img/atencion247.png" width="25%"></center>
                <center><h5>24/7 ASISTENCIA</h5></center>
                <center><h7>Durante todo tu <br>      
                viaje</h7></center>
                </td>
            </tr>
        </table>
        </center>
    </div>

    <br><br>
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