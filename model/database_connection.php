<?php
    $username="u776219506_chiapasoculto";
    $password="Equip@3_web";
    $database="chiapas_oculto";

    $mysqli = new mysqli("localhost", $username, $password, $database);}

    $mysqli->select_db($database) or die(" Unable to select database");
?>