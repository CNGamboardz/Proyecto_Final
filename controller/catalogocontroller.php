<?php

require_once("model/catalogo.php");

class CatalogoController {
    private $catalogo;

    public function __construct() {
        $this->catalogo = new catalogo();
    }

    public function mostrarTours() {
        session_start();
        if ($_SESSION['id_rango'] == 0) {
            $paquetes = $this->catalogo->MostrarDatos3(); // admin ve todo
        } else {
            $paquetes = $this->catalogo->MostrarDatosPorOperadora($_SESSION['id_operadora'], 'tour');
        }

        require_once("view/forms/tours.php");
    }

    public function mostrarPaquetes() {
        session_start();
        if ($_SESSION['id_rango'] == 0) {
            $paquetes = $this->catalogo->MostrarDatos3(); // admin ve todo
        } else {
            $paquetes = $this->catalogo->MostrarDatosPorOperadora($_SESSION['id_operadora'], 'paquete');
        }

        require_once("view/forms/paquetes.php");
    }
}

?>
