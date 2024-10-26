<?php

require_once("model/formsmodel.php");

class FormsController {
    private $formsmodel;
    
    public function __construct() {
        $this->formsmodel = new formsmodel();
    }

    public static function paquetes() {
        require_once('view/forms/paquetes.php');
    }

    public static function tours() {
        require_once('view/forms/tours.php');
    }

    public static function contacto(){
        require_once('view/forms/contacto.php');
    }

    public static function login(){
        require_once('view/forms/login.php');
    }

    public static function carrito(){
        require_once('view/forms/carrito.php');
    }
}
?>
