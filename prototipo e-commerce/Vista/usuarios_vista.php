<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Documento sin título</title>

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">

	<style type="text/css">
		table{
			background-color: white;
			text-align: right;
			border-collapse: collapse;
			width: 70%;
		}

		tr td{
			padding: 20px;
		}

		thead{
			background-color: #2980b9;
			border-bottom: solid 5px black;
			color: white;
		}

		tr:nth-child(even){
			background-color: #ddd;
		}

		tr:hover td{
			background-color: #2980b9;
			color: white;
		}

		.insert{
			text-decoration: none;
			display: block;
			border: 1px solid black;
			width: 80px;
			height: 25px;
			text-align: center;
			padding-top: 10px;
			margin: left;

			background-color: #2980b9;
			color: #fff;
			font-family: arial;
		}
	</style>
</head>

<body>

<?php 

//require("modelo/paginacion.php")

?>

<div >
	<header id="principal">
			<div id="logo">
				<h2 class="titulo">PetShop</h2>
				<p class="sub-titulo">Todo lo que tu mascota quiere</p>	
			</div>

			<nav class="menu">
				<ul>
					<li><a href="../inicio.html">Inicio</a></li>
					<li><a href="">Perros</a></li>
					<li><a href="controlador_catálogoGato.php">Gatos</a></li>
					<li><a href="">Registro</a></li>
					<li><a href="">Iniciar sesión</a></li>
				</ul>
			</nav>
	</header>

	<br><center><tr><td>USUARIOS</td></tr></center>

	<form action = "" method = "">
		<table width = "70%" border = "0" align = "center">
			<thead>
				<tr>
					<td class = "primera fila">Nombre</td>
					<td class = "primera fila">Apellido</td>
					<td class = "primera fila">Identificación</td>
					<td class = "primera fila">Email</td>
					<td class = "primera fila">Telefono</td>
					<td class = "primera fila">Dirección</td>    <?php //nombre del campo en la tabla?>
					<td class = "sin">&nbsp;</td>
					<td class = "sin">&nbsp;</td>		
	   			</tr>
			</thead>
		
	   
	   			<?php 
	   
	   			foreach ($matrizUsuarios as $usuario):?>
	   
	   			<tr>
	   	 			<td><?php echo $usuario["Nom1_Us"]?></td>
	     			<td><?php echo $usuario["Ape1_Us"]?></td>
	     			<td><?php echo $usuario["Doc_Us"]?></td>
	     			<td><?php echo $usuario["Email_Us"]?></td>
	     			<td><?php echo $usuario["Tel_Us"]?></td>
	     			<td><?php echo $usuario["Direc_Us"]?></td>    <?php //nombre del campo en la BBDD?>
	     
	     			<td class = "bot"> <a href = "../Controlador/usuarios_controlador.php?id=<?php echo $usuario["idUsuario"]?>"> <input type = 'button' 	name = 'del' id = 'del' value = 'Borrar'></a></td>
	     			<td class = "bot"><a href = "../Vista/actualizarUsuario_vista.php?id=<?php echo $usuario["idUsuario"]?> & nom= <?php echo $usuario["Nom1_Us"]?> & ape= <?php echo $usuario["Ape1_Us"]?> & doc= <?php echo $usuario["Doc_Us"]?> & 	email= <?php echo $usuario["Email_Us"]?> & tel= <?php echo $usuario["Tel_Us"]?> & dir= <?php echo $usuario["Direc_Us"]?>"> <input type = 'button' name = 'up' id = 'up' 	value = 'Actualizar'></a></td>
	   			</tr>
	         
	    		<?php 
	    		endforeach;
	    		?>
		</table>
	</form>

	<br><center><a href="../Vista/insertarUsuario_vista.html" class="insert">Insertar</a></center>


	
	<footer id="principal">
		<p>
			contacto@petshop.com<br>
			Diseñado por<br>
			Santiago Trigos y Carlos Montes</a>
		</p>
	</footer>
</div>

</body>
</html>