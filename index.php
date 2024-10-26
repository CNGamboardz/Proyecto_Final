<?php
require_once('config.php');
require_once('controller/indexcontroller.php');

if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('productosController',$metodo)):
        productosController::{$metodo}();
    endif;
else:
    if(isset($_GET['u'])):
        $metodo =  $_GET['u'];
        if(method_exists('UsuarioController',$metodo)):
            UsuarioController::{$metodo}();
        endif;
  
    else:
    if(isset($_GET['i'])):
        $metodo =  $_GET['i'];
        if(method_exists('indexController',$metodo)):
            indexController::{$metodo}();
        endif;
    else:
        indexController::index();
    endif;  
endif;
 endif;
?>