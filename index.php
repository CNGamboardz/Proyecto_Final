<?php
echo "hola";
require_once("config.php");
require_once("controller/formscontroller.php");
require_once("controller/indexcontroller.php");

session_start(); // Asegúrate de iniciar la sesión aquí

// Verifica si el usuario quiere cerrar sesión
if (isset($_GET['u']) && $_GET['u'] === 'logout') {
    FormsController::logout(); // Llama al método logout desde FormsController
    exit;
}

// Manejo de rutas
if (isset($_GET['u'])): // Si 'u' está definido en la URL
    $metodo = $_GET['u'];

    if (method_exists('FormsController', $metodo)):
        FormsController::{$metodo}(); // Llama al método de FormsController
        exit;
    else:
        // Maneja rutas no válidas (opcional)
        echo "Página no encontrada";
        exit;
    endif;

elseif (isset($_GET['i'])): // Si 'i' está definido en la URL
    $metodo = $_GET['i'];

    if (method_exists('IndexController', $metodo)):
        IndexController::{$metodo}(); // Llama al método de IndexController
        exit;
    else:
        // Maneja rutas no válidas (opcional)
        echo "Página no encontrada";
        exit;
    endif;

else: // Ruta por defecto
    IndexController::index();
    exit;
endif;
?>
