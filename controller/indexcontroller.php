<?php

include_once("model/indexmodel.php");

class IndexController{
    private $indexModel;

    public function __construct(){

        $this->indexModel = new IndexModel();

    }
    public static function index(){

        require_once("indice.php");

    }
    public function tours(){
        require_once("tours.php");
    }
}

?>