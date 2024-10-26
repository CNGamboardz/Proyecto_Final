<?php
require_once("config.php");
require_once("controller/formscontroller.php");
require_once("controller/indexcontroller.php");

if(isset($_GET['p'])):
    $metodo =  $_GET['p'];
    if(method_exists('productosController', $metodo)):
        productosController::{$metodo}();
    endif;
else:
    if(isset($_GET['u'])):
        $metodo =  $_GET['u'];
        if(method_exists('formscontroller', $metodo)):
            formscontroller::{$metodo}();
        endif;
  
    else:
        if(isset($_GET['i'])):
            $metodo =  $_GET['i'];
            if(method_exists('IndexController', $metodo)):
                IndexController::{$metodo}();
            endif;
        else:
            IndexController::index();
        endif;  
    endif;
endif;
?>
