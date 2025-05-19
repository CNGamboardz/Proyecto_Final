<?php
require_once("model/carritomodel.php");
require_once("model/formsmodel.php");
require_once("model/catalogo.php");
require_once("model/database_connection.php");

class FormsController
{
    private $formsmodel;
    private $catalogo;
    private $carrito;

    public function __construct()
    {
        $this->formsmodel = new formsmodel();
    }

    public static function paquetes()
    {
        $catalogo = new Catalogo();

        if (isset($_SESSION['id_rango']) && $_SESSION['id_rango'] == 3) {
            // Operadora: solo ver sus propios paquetes
            $id_operadora = $_SESSION['ID_operadora'];
            $paquetes = $catalogo->MostrarPaquetesPorOperadora($id_operadora);
        } else {
            // Cliente o admin: ver todos
            $paquetes = $catalogo->MostrarDatos(2); // o MostrarDatosGeneral()
        }

        require_once('view/forms/paquetes.php');
    }

    public static function compras()
    {
        require_once('view/forms/compras.php');
    }

public static function tours()
{
    $catalogo = new Catalogo();

    if (isset($_SESSION['id_rango']) && $_SESSION['id_rango'] == 3) {
        // Operadora: ver solo sus propios TOURS (id_categoria = 1)
        $id_operadora = $_SESSION['ID_operadora'];
        $paquetes = $catalogo->MostrarToursPorOperadora($id_operadora); // ✅ corregido
    } else {
        // Cliente o admin: ver todos los TOURS
        $paquetes=$catalogo->MostrarDatos(1);
    }

    require_once('view/forms/tours.php');
}



    public static function contacto()
    {
        require_once('view/forms/contacto.php');
    }

    public static function login()
    {
        require_once('view/forms/login.php');
    }

    public static function carrito()
    {
        require_once('view/forms/carrito.php');
    }
    public static function register()
    {
        require_once('view/forms/register.php');
    }

    public static function cascadas()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(2);
        require_once('view/forms/cascadas.php');
    }

    public static function cañon()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(3);
        require_once('view/forms/cañon.php');
    }

    public static function simacotorras()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(12);
        require_once('view/forms/simacotorras.php');
    }

    public static function arqueologiaselva()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(4);
        require_once('view/forms/arqueologiaselva.php');
    }

    public static function paraisoselva()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(11);
        require_once('view/forms/paraisoselva.php');
    }

    public static function esenciachiapaneca()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(5);
        require_once('view/forms/esenciachiapaneca.php');
    }

    public static function zonarqueologica()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(13);
        require_once('view/forms/zonarqueologica.php');
    }

    public static function palenque()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(14);
        require_once('view/forms/palenque.php');
    }

    public static function bonampak()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(15);
        require_once('view/forms/bonampak.php');
    }

    public static function lagunasmontebello()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(16);
        require_once('view/forms/lagunasmontebello.php');
    }

    public static function cascadaschiflon()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(17);
        require_once('view/forms/cascadaschiflon.php');
    }

    public static function arcotete()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(18);
        require_once('view/forms/arcotete.php');
    }

    public static function cascadaroberto()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(19);
        require_once('view/forms/cascadaroberto.php');
    }

    public static function arcocintalapa()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(20);
        require_once('view/forms/arcocintalapa.php');
    }

    public static function maravillaschiapas()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(7);
        require_once('view/forms/maravillaschiapas.php');
    }

    public static function rutasmaya()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(6);
        require_once('view/forms/rutasmaya.php');
    }

    public static function rutasmchiapas()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(8);
        require_once('view/forms/rutasmchiapas.php');
    }

    public static function expedicionchiapaneca()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(9);
        require_once('view/forms/expedicionchiapaneca.php');
    }

    public static function exploradoresazul()
    {
        $catalogo = new Catalogo();
        $paquetes = $catalogo->MostrarDatos2(10);
        require_once('view/forms/exploradoresazul.php');
    }

    public static function pago()
    {
        require_once('view/forms/pago.php');
    }

    public static function editar()
    {
        // $catalogo = new Catalogo();
        // $paquetes=$catalogo->MostrarDatos3();
        // require_once('view/forms/editar.php');
        if (!isset($_GET['id'])) {
            echo "No se proporcionó un ID válido.";
            exit;
        }

        $id = $_GET['id'];
        $formsmodel = new FormsModel();
        $paquete = $formsmodel->ObtenerCatalogoPorId($id); // Obtén el único registro        
        if ($paquete) {
            // Pasa el único paquete a la vista
            require_once 'view/forms/editar.php';
        } else {
            echo "No se encontró el catálogo con el ID proporcionado.";
            exit;
        }
    }


    public static function registrar()
    {
        session_start(); // Inicia la sesión si no se ha iniciado previamente

        // Verifica si hay una sesión activa con un rol
        $rol = isset($_SESSION['id_rango']) ? $_SESSION['id_rango'] : null;

        $nombre = $_POST['nombres'];
        $apellidos = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $formsmodel = new FormsModel();

        // Decide qué método usar basado en el rol
        if ($rol === 1) { // Si el rol es Administrador
            $resultado = $formsmodel->GuardarAdministrador($nombre, $apellidos, $telefono, $correo, $contrasena);
        } else { // Si no hay rol o el rol no es Administrador
            $resultado = $formsmodel->GuardarUsuario($nombre, $apellidos, $telefono, $correo, $contrasena);
        }

        // Manejo del resultado
        if ($resultado === true) {
            header("location:" . urlsite . "index.php?u=login");
        } elseif ($resultado === "El correo ya está registrado.") {
            header("location:" . urlsite . "index.php?u=register");
        } else {
            echo "Error al registrar el usuario.";
        }
    }

    public static function AgregarProducto()
    {
        session_start();

        if (
            isset($_POST['Nombre'], $_POST['Descripcion'], $_POST['Precio'], $_POST['imagen'], $_POST['urls'], $_POST['id_categoria']) &&
            isset($_SESSION['ID_operadora']) // ¡Debe estar definida esta sesión!
        ) {
            $Nombre = $_POST['Nombre'];
            $Descripcion = $_POST['Descripcion'];
            $Precio = $_POST['Precio'];
            $imagen = $_POST['imagen'];
            $urls = $_POST['urls'];
            $id_categoria = $_POST['id_categoria'];
            $id_operadoras = $_SESSION['ID_operadora']; // El nombre de la variable puede seguir así

            $formsmodel = new FormsModel();
            $resultado = $formsmodel->AgregarProducto($Nombre, $Descripcion, $Precio, $imagen, $urls, $id_categoria, $id_operadoras);

            if ($resultado) {
                header("Location: " . urlsite . "index.php");
                exit;
            } else {
                echo "Error al registrar el producto.";
            }
        } else {
            echo "Faltan datos o no hay sesión de operadora.";
        }
    }



    public static function validar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['correo'], $_POST['contrasena'])) {
            $correo = $_POST['correo'];
            $contrasena = $_POST['contrasena'];

            // Cargar el modelo
            $formsmodel = new FormsModel();

            // Primero intentamos validar como usuario (admin o cliente)
            $usuario = $formsmodel->ValidarUsuario($correo, $contrasena);

            session_start();

            if ($usuario) {
                // Guardar en sesión como usuario
                $_SESSION['usuario_nombre'] = $usuario['NombreUsuario'];
                $_SESSION['usuario_apellido'] = $usuario['Apellido'];
                $_SESSION['id_rango'] = $usuario['id_rango'];

                header('Location: index.php');
                exit;
            } else {
                // Si no es usuario, intentamos validar como operadora
                $operadora = $formsmodel->ValidarOperadora($correo, $contrasena);

                if ($operadora) {
                    // Guardar en sesión como operadora
                    $_SESSION['usuario_nombre'] = $operadora['nombredeoperadoras'];
                    $_SESSION['id_rango'] = $operadora['id_rango']; // Esto ya debe venir como 3
                    $_SESSION['ID_operadora'] = $operadora['id_operadoras'];

                    header('Location: index.php');
                    exit;
                } else {
                    // Si no es usuario ni operadora
                    echo "Correo o contraseña incorrectos.";
                }
            }
        }
    }

    public static function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    }

    public static function guardarComentario()
    {
        include_once("model/formsmodel.php");

        // Recoger datos del formulario
        $nombre = isset($_POST['nombre_contacto']) ? trim($_POST['nombre_contacto']) : null;
        $correo = isset($_POST['correo_contacto']) ? trim($_POST['correo_contacto']) : null;
        $mensaje = isset($_POST['mensaje']) ? trim($_POST['mensaje']) : null;
        $usuario = isset($_SESSION['ID_usuario']) ? $_SESSION['ID_usuario'] : null;

        // Iniciar sesión si no está ya iniciada
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Depuración: Verificar si la sesión contiene el ID_usuario
        if (isset($_SESSION['ID_usuario'])) {
            echo "Usuario logueado con ID: " . $_SESSION['ID_usuario'];
        } else {
            echo "No hay usuario logueado.";
            echo "<br>";
        }

        // Obtener usuario si está logueado
        $usuario = isset($_SESSION['ID_usuario']) ? $_SESSION['ID_usuario'] : null;

        // Verificar si el usuario está logueado
        if ($usuario === null) {
            echo "Debe iniciar sesión para enviar un comentario.";
            echo "<br>";
            return;
        }

        // Validar que todos los campos estén llenos
        if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
            // Validar correo electrónico
            if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo "El correo electrónico no es válido.";
                return;
            }

            // Guardar en la base de datos
            $formsmodel = new FormsModel();
            $exito = $formsmodel->GuardarComentario($nombre, $correo, $mensaje, $usuario);

            if ($exito) {
                header("Location: index.php"); // Redirigir tras éxito
                exit();
            } else {
                echo "Error al guardar el comentario.";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
    }

    public static function eliminardato()
    {
        if (isset($_GET['id'])) {
            $paquete = $_GET['id']; // Ahora estamos tomando 'id' de la URL
            $formsmodel = new FormsModel();
            $formsmodel->EliminarDato($paquete);
            header("location:" . urlsite . "index.php"); // Redirigir después de la eliminación
            exit();
        } else {
            echo "No se encontró el ID del paquete.";
        }
    }

    public static function EditarCatalogo()
    {
        $id = $_REQUEST['id']; // Asegúrate de que el campo tenga el nombre correcto
        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        $precio = $_REQUEST['precio'];

        $formsmodel = new FormsModel();
        $resultado = $formsmodel->editarcatalogo($id, $nombre, $descripcion, $precio);

        if ($resultado) {
            header("Location: " . urlsite . "index.php"); // Redirige después de editar
        } else {
            echo "Error al actualizar el catálogo.";
        }
    }

    public static function MostrarEditarFormulario()
    {
        if (!isset($_GET['id'])) {
            echo "No se proporcionó un ID válido.";
            exit;
        }

        $id = $_GET['id'];
        echo $id; // Obtén el ID desde la URL

        $formsmodel = new FormsModel();
        $paquete = $formsmodel->ObtenerCatalogoPorId($id); // Obtén el único registro
        var_dump($paquete);

        if ($paquete) {
            // Pasa el único paquete a la vista
            require_once 'view/forms/editar.php';
        } else {
            echo "No se encontró el catálogo con el ID proporcionado.";
            exit;
        }
    }

    public static function btnagregarproducto()
    {
        require_once('view/forms/agregarproducto.php');
    }
}
