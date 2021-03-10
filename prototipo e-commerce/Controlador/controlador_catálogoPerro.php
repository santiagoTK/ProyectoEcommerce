<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

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
					<li><a href="">Perros</a></li>
					<li><a href="controlador_catálogoGato.php">Gatos</a></li>
					<li><a href="">Registro</a></li>
					<li><a href="../Vista/login_vista.html">Iniciar sesión</a></li>
				</ul>
			</nav>
	</header>

	<?php
	require_once "../Modelo/modelo_catálogo.php";

	$objproductos = new Productos(4);
	?>

	<div id = "container">
		
		<div id = "productos">
			<?php

			$objproductos->mostrarProductosperro();

			?>
		</div>

		<div id = "paginas">
			<?php

			$objproductos->mostrarPaginas();

			?>
		</div>
	
	</div>
	
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
