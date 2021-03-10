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
	</style>
</head>

<body>

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

	<br><center><tr><td>COMPRAS</td></tr></center>

	<form action = "" method = "">
		<table width = "70%" border = "0" align = "center">
			<thead>
				<tr>
					<td class = "primera fila">Producto</td>
					<td class = "primera fila">Precio</td>
					<td class = "primera fila">Cantidad</td>
					<td class = "primera fila">Fecha</td>
					<td class = "primera fila">Tipo de pago</td>
					<td class = "primera fila">Nombre</td>
					<td class = "primera fila">Apellido</td>    <?php //nombre del campo en la tabla?>		
	   			</tr>
			</thead>
		
	   
	   			<?php 
	   
	   			foreach ($matrizCompras as $compra):?>
	   
	   			<tr>
	   	 			<td><?php echo $compra["Nom_prod"]?></td>
	     			<td><?php echo $compra["Prec_prod"]?></td>
	     			<td><?php echo $compra["Cant"]?></td>
	     			<td><?php echo $compra["Fech_comp"]?></td>
	     			<td><?php echo $compra["Tipo_pago"]?></td>
	     			<td><?php echo $compra["Nom1_Us"]?></td>
	     			<td><?php echo $compra["Ape1_Us"]?></td>    <?php //nombre del campo en la BBDD?>		
	   			</tr>
	         
	    		<?php 
	    		endforeach;
	    		?>
	    		
	      		<!--<tr>
	      			<td><a href="">Insertar</a></td>
	      		</tr>-->
	    		
		</table>
	</form>
	
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
