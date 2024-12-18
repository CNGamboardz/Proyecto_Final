<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Pago Chiapas Oculto</title>
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
            <h3><b>CARRITO &rarr; <span class="subrayado"> PAGAR </span> &rarr; PEDIDO REALIZADO</b></h3>
        </center><br>
    </div>

    <br>
    <div class="table-responsive">
        <center>
            <table width=95%>
                <tr width="50%">
                    <td width="50%">
                        <br><br>
                        <h4>DETALLES DE FACTURACIÓN</h4>
                        <br>
                        <p>NOMBRE <b class="obligado" style="color: red;">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; APELLIDOS <b class="obligado" style="color: red;">*</b> </p>
                        <input type="text" class="textbox" name="nombre" placeholder="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="textbox" name="apellido" placeholder="">
                        <br><br>
                        <p>REGIÓN/PROVINCIA <b class="obligado" style="color: red;">*</b></p>
                        <input type="text" class="textbox2" name="provincia" placeholder="">
                        <br><br>
                        <p>TELÉFONO<b class="obligado" style="color: red;">*</b></p>
                        <input type="text" class="textbox2" name="telefono" placeholder="">
                        <br><br>
                        <p>DIRECCIÓN DE CORREO ELECTRONICO<b class="obligado" style="color: red;">*</b></p>
                        <input type="text" class="textbox2" name="correo" placeholder="">
                        <br><br><br>
                        <p>INFORMACIÓN ADICIONAL</p>
                        <br>
                        <p class="pequeno"><b>Proporciona más información sobre tu llegada a Chiapas (opcional)</b></p>
                        <textarea class="textbox3" name="direccion" placeholder="" id="mensaje"></textarea>
                        <br><br><br><br><br><br><br><br><br><br>
                    </td>

                    <td width="20%">
                        <div class="recuadrocarrito2">

                            <div style="margin-left: 40px;">
                                <div class="rectangle10">

                                    <center>
                                        <h2>TU PEDIDO</h2>
                                    </center>
                                    <br><br>
                                    <p><b>PRODUCTO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBTOTAL</b></p>
                                    <hr>
                                    <p><b>IVA 16%:</b></p>
                                    <hr>
                                    <p><b>TOTAL: </b></p>
                                </div>
                                <br>
                                <b>
                                    <h9>TARJETA DE DEBITO/CRÉDITO</h9>
                                </b><br><br>

                                <div class="rectangle10">
                                    <p>NUMERO DE TARJETA<b class="obligado" style="color: red;">*</b></p>
                                    <input type="text" class="textbox" name="tarjeta" placeholder=" 0000 0000 0000 0000 0000">
                                    <br><br>
                                    <p>Titular de la Tarjeta<b class="obligado" style="color: red;">*</b></p>
                                    <input type="text" class="textbox" name="nombre_completo" placeholder=" Ex: Pedro Peréz">
                                    <br><br>
                                    <p>Fecha de vencimiento <b class="obligado" style="color: red;">*</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CVV <b class="obligado" style="color: red;">*</b> </p>
                                    <input type="text" class="textbox4" name="vencimiento" placeholder="mm/aa">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="textbox4" name="ccv" placeholder="123">
                                    <center>
                                        <br>
                                        <table>
                                            <tr>
                                                <td>
                                                    <p>
                                                        Al continuar aceptas nuestros
                                                    </p>
                                                </td>
                                                <td style="padding-left: 4px;">
                                                    <p>
                                                        <a style="color: blue;" href=" " class="link">Terminos y condiciones</a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </center>
                                </div>
                            </div>
                            <hr>
                            <p style="line-height: 1.5;">
                                Sus datos personales se utilizarán para respaldar su experiencia en este sitio web, para administrar el acceso a su cuenta
                                y para otros fines descritos en nuestra
                            </p>
                            <div class="politica_privacidad">
                                <a href=" " class="link" style="color: blue;">política de privacidad</a>
                            </div>
                            <hr>

                            <center>
                                <br>
                                <div class="checkbox-2">
                                    <input type="checkbox" id="terms" />
                                    <label for="terms" class="ajuste">
                                        He leído y estoy de acuerdo con los <a href="#" class="link">Términos y condiciones</a> de la web<span class="astedisco">*</span>
                                    </label>
                                </div>
                            </center>


                            <div class="counter-container">
                                <button class="btn4">
                                    <center>
                                        <p style="color: white;">REALIZAR PEDIDO</p>
                                    </center>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>




    <br><br><br>

    <div class="rectangle2">
        <center>
            <table width=90%>
                <tr width=80%>
                    <td width="25%">
                        <center><img src="view/img/carrito_escudo.png" width="25%"></center>
                        <center>
                            <h5>COMPRA SEGURA</h5>
                        </center>
                        <center>
                            <h7>Con Licencia de <br>Seguridad</h7>
                        </center>

                    </td>

                    <td width="25%">
                        <center><img src="view/img/compras_linea.png" width="25%"></center><br>
                        <center>
                            <h5>COMPRA EN LÍNEA</h5>
                        </center>
                        <center>
                            <h7>Reserva Segura</h7>
                        </center>
                    </td>

                    <td width="25%">
                        <center><img src="view/img/maleta.png" width="25%"></center>
                        <center>
                            <h5>LOS MEJORES LUGARES <br>
                                DE CHIAPAS</h5>
                        </center>
                        <center>
                            <h7>Conoce lo mejor <br>
                                de Chiapas</h7>
                        </center>
                    </td>

                    <td width="25%">
                        <center><img src="view/img/atencion247.png" width="25%"></center>
                        <center>
                            <h5>24/7 ASISTENCIA</h5>
                        </center>
                        <center>
                            <h7>Durante todo tu <br>
                                viaje</h7>
                        </center>
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