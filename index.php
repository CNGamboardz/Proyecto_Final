<?php
require_once("config.php");
require_once("controller/formscontroller.php");
require_once("controller/indexcontroller.php");

if (isset($_GET['u'])):
    $metodo = $_GET['u'];
    if (method_exists('FormsController', $metodo)):
        FormsController::{$metodo}();
    endif;
  
elseif (isset($_GET['i'])):
    $metodo = $_GET['i'];
    if (method_exists('IndexController', $metodo)):
        IndexController::{$metodo}();
    endif;
  
else:
    IndexController::index();
endif;
?>
