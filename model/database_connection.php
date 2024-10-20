<?php
    $username="root";
    $password="root";
    $database="chiapas_oculto";

    $mysqli = new mysqli("localhost", $username, $password, $database);}

    $mysqli->select_db($database) or die(" Unable to select database");
?>