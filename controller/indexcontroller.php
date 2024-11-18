<?php

include_once("model/indexmodel.php");

class IndexController{
    private $indexModel;

    public function __construct(){

        $this->indexModel = new IndexModel();

    }
    public static function index(){
        $catalogo = new Catalogo();
        $paquetes=$catalogo->MostrarDatos(1);

        $catalogo = new Catalogo();
        $tours=$catalogo->MostrarDatos(2);
        require_once("indice.php");

    }
}

?>