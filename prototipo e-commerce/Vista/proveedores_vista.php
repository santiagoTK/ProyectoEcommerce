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

<div id="principal">
	<header>
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

	<br><center><tr><td>PROVEEDORES</td></tr></center>

	<form action = "" method = "">
		<table width = "70%" border = "0" align = "center">
			<thead>
				<tr>
					<td class = "primera fila">Nombre</td>
					<td class = "primera fila">Telefono</td>
					<td class = "primera fila">Direccion</td>
					<td class = "primera fila">Email</td>
					<td class = "primera fila">Estado</td>    <?php //nombre del campo en la tabla?>
					<td class = "sin">&nbsp;</td>
					<td class = "sin">&nbsp;</td>		
	   			</tr>
			</thead>
		
	   
	   		<?php 
	   
	   		foreach ($matrizProveedores as $proveedor):?>
	   
	   		<tr>
	   	 		<td><?php echo $proveedor["Nom_prov"]?></td>
	     		<td><?php echo $proveedor["Tel_prov"]?></td>
	     		<td><?php echo $proveedor["Direc_prov"]?></td>
	     		<td><?php echo $proveedor["Email_prov"]?></td>
	     		<td><?php echo $proveedor["Estado_prov"]?></td>    <?php //nombre del campo en la BBDD?>
	     
	     		<td class = "bot"> <a href = "../Controlador/proveedores_controlador.php?id=<?php echo $proveedor["idProveedor"]?>"> <input type = 'button' name = 'del' id = 'del' value = 'Borrar'></a></td>
	     		<td class = "bot"><a href = "../Vista/actualizarProveedor_vista.php?id=<?php echo $proveedor["idProveedor"]?> & nom= <?php echo $proveedor["Nom_prov"]?> & tel= <?php echo $proveedor["Tel_prov"]?> & dir= <?php echo $proveedor["Direc_prov"]?> & email= <?php echo $proveedor["Email_prov"]?> & est= <?php echo $proveedor["Estado_prov"]?>"> <input type = 'button' name = 'up' id = 'up' 	value = 'Actualizar'></a></td>
	   		</tr>
	         
	    	<?php 
	    	endforeach;
	    	?>   

		</table>
	</form>

	<br><center><a href="../Vista/insertarProveedor_vista.html" class="insert">Insertar</a></center>
	
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