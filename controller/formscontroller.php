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
    public static function register(){
        require_once('view/forms/register.php');
    }

    public static function cascadas(){
        require_once('view/forms/cascadas.php');
    }
    
    public static function cañon(){
        require_once('view/forms/cañon.php');
    }

    public static function simacotorras(){
        require_once('view/forms/simacotorras.php');
    }
    
    public static function arqueologiaselva(){
        require_once('view/forms/arqueologiaselva.php');
    }
        
    public static function paraisoselva(){
        require_once('view/forms/paraisoselva.php');
    }
            
    public static function esenciachiapaneca(){
        require_once('view/forms/esenciachiapaneca.php');
    }
                
    public static function zonarqueologica(){
        require_once('view/forms/zonarqueologica.php');
    }

    public static function palenque(){
        require_once('view/forms/palenque.php');
    }
    
    public static function bonampak(){
        require_once('view/forms/bonampak.php');
    }
        
    public static function lagunasmontebello(){
        require_once('view/forms/lagunasmontebello.php');
    }
            
    public static function cascadaschiflon(){
        require_once('view/forms/cascadaschiflon.php');
    }
                
    public static function arcotete(){
        require_once('view/forms/arcotete.php');
    }
                    
    public static function cascadaroberto(){
        require_once('view/forms/cascadaroberto.php');
    }
                        
    public static function arcocintalapa(){
        require_once('view/forms/arcocintalapa.php');
    }
                            
    public static function maravillaschiapas(){
        require_once('view/forms/maravillaschiapas.php');
    }
                                
    public static function rutasmaya(){
        require_once('view/forms/rutasmaya.php');
    }
                                    
    public static function rutasmchiapas(){
        require_once('view/forms/rutasmchiapas.php');
    }
                                        
    public static function expedicionchiapaneca(){
        require_once('view/forms/expedicionchiapaneca.php');
    }
                                            
    public static function exploradoresazul(){
        require_once('view/forms/exploradoresazul.php');
    }
}
?>
