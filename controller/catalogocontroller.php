<?php

require_once("model/catalogo.php");

    Class CatalogoController{
        private $catalogo;

        public function __construct(){
            $this->catalogo = new catalogo();
        }
    }
?>
