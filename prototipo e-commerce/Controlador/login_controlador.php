<?php

require "../Modelo/login_modelo.php";
require "../Modelo/sesion_modelo.php";

$obj_login = new Usuario_login();

if(isset($_POST['user']) AND isset($_POST['pass']))
{
	$usuario = $_POST['user'];
	$contraseña = $_POST['pass'];

	if ($obj_login->Usuario_exist($usuario, $contraseña))
	{
		$obj_sesion = new sesionUsuario();

		$obj_login->NomUsuario();

		$obj_sesion->setSession($obj_login->getNomUsuario());

		header("location: ../Vista/MenuAdmin_Vista.php");
	}else{
		header("location: ../Vista/error_vista.html");
	}		
}

?>