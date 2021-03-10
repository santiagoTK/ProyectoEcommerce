<?php

if (!isset($_POST["bot_actualizar"])) //evita que se envien los datos otra vez por la url al dar click sobre submit
{
	$id = $_GET['id'];
	$nom = $_GET['nom'];
	$ape = $_GET['ape'];
	$doc = $_GET['doc'];
	$email = $_GET['email'];
	$dir = $_GET['dir'];
	$tel = $_GET['tel'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

	<style type="text/css">
		
	/*----------------formularios--------------------*/
		
		form{
			margin: 0 auto;
			width: 300px;
			background-color: #2980b9;
			padding: 20px;
			color: #fff;
			border-radius: 3px;
		}

		.field{
			border: solid 1px #ccc;
			padding: 10px;
			width: 280px;
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
					<li><a href="../inicio.html">Inicio</a></li>
					<li><a href="../Controlador/controlador_catálogoPerro.php">Perros</a></li>
					<li><a href="../Controlador/controlador_catálogoGato.php">Gatos</a></li>
					<li><a href="">Registro</a></li>
					<li><a href="">Iniciar sesión</a></li>
				</ul>
			</nav>
	</header>

	<br><center><h3>ACTUALIZAR</h3></center>

	<form action="../Controlador/usuarios_controlador.php" method="POST">
	
		<input type="hidden" name="id" value="<?php echo $id ?>">
		
		<p>Nombre</p>
		<input type="text" name="nom" value="<?php echo $nom ?>" required><br>
		
		<p>Apellido</p>
		<input type="text" name="ape" value="<?php echo $ape ?>" required><br>
		
		<p>Documento</p>
		<input type="text" name="doc" value="<?php echo $doc ?>" required><br>
		
		<p>Email</p>
		<input type="text" name="email" value="<?php echo $email ?>" required><br>
		
		<p>Telefono</p>
		<input type="text" name="tel" value="<?php echo $tel ?>" required><br>
		
		<p>Direccion</p>
		<input type="text" name="dir" value="<?php echo $dir ?>" required><br>
		
		<input type="submit" name="bot_actualizar" value="Actualizar">
	</form>
	
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