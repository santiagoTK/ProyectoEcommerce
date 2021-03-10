<?php

include_once "../Modelo/sesion_modelo.php";

$obj_sesion = new sesionUsuario();
$obj_sesion->closeSession();

header("location: ../index.html");

?>