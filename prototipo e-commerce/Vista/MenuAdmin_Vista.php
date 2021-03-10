<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

	<style type="text/css">
		aside a{
			text-decoration: none;
			display: block;
			border: 1px solid black;
			width: 200px;
			height: 35px;
			text-align: center;
			padding-top: 15px;
			margin: left;

			background-color: #2980b9;
			color: #fff;
			font-family: arial;
			}

		aside a:hover{
			background-color: #fff;
			color: #2980b9;
			}
	</style>
</head>
<body>
	
<div id="principal">
	<header>
			<div id="logo">
				<h2 class="titulo">PetShop</h2>
				<p class="sub-titulo">Todo lo que tu mascota quiere</p>	
			</div>

			<nav class="menu">
				<ul>
					<li><a href="../index.html">Inicio</a></li>
					<li><a href="../Controlador/controlador_catálogoPerro.php">Perros</a></li>
					<li><a href="../Controlador/controlador_catálogoGato.php">Gatos</a></li>
					<li><a href="">Registro</a></li>
					<li><a href="">Iniciar sesión</a></li>
				</ul>
			</nav>
	</header>

	<?php

	require "../Modelo/sesion_modelo.php";

	$obj_sesion = new sesionUsuario();

	if (isset($_SESSION['mysession']))
	{
	echo "Hola " . $obj_sesion->getSession() . ", Bienvenido a tu sesión";
	}	

	?>

	<aside>
	<br><a href="../Controlador/usuarios_controlador.php?a=1">Gestionar Usuarios</a><br>
	<a href="../Controlador/productos_controlador.php?a=1">Gestionar Productos</a><br>
	<a href="../Controlador/proveedores_controlador.php?a=1">Gestionar Proveedores</a><br>
	<a href="../Controlador/productos_controlador.php?c=1">Registro de Compras</a>
	</aside>

	<br><a href="../Controlador/logout.php">Cerrar sesión</a>
	
	<footer>
		<p>
			contacto@petshop.com<br>
			Diseñado por<br>
			Santiago Trigos y Carlos Montes</a>
		</p>
	</footer>
</div>

</body>
</html>