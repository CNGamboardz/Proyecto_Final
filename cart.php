<?php
session_start();

// Inicializar el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Manejar las solicitudes AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $accion = $_POST['accion'];

    if ($accion === 'agregar') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = floatval($_POST['precio']);
        $cantidad = intval($_POST['cantidad']);

        // Verificar si el producto ya está en el carrito
        $encontrado = false;
        foreach ($_SESSION['carrito'] as &$item) {
            if ($item['id'] === $id) {
                $item['cantidad'] += $cantidad;
                $item['subtotal'] += $precio * $cantidad;
                $encontrado = true;
                break;
            }
        }

        // Si no está en el carrito, agregarlo
        if (!$encontrado) {
            $_SESSION['carrito'][] = [
                'id' => $id,
                'nombre' => $nombre,
                'precio' => $precio,
                'cantidad' => $cantidad,
                'subtotal' => $precio * $cantidad
            ];
        }
    }

    if ($accion === 'listar') {
        header('Content-Type: application/json');
        echo json_encode($_SESSION['carrito']);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['accion'] === 'eliminar') {
    $id = $_POST['id'];

    foreach ($_SESSION['carrito'] as $index => $item) {
        if ($item['id'] == $id) {
            unset($_SESSION['carrito'][$index]);
            $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexar
            break;
        }
    }

    echo json_encode(['status' => 'ok']);
    exit;
}

?>
