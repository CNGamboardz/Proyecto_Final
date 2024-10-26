<?php

require_once('model/formsmodel.php');
class formscontroller{
    private $formsmodel;
    public function __construct(){
        $this->formsmodel=new formsmodel();

    }
    public static function paquetes (){
        require_once ('view/forms/paquetes.php');
    }
    public static function tours(){
        require_once('view/forms/tours.php');
    }
}
?>