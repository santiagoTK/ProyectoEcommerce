<?php 

require ("../Modelo/productos_modelo.php"); //llamada al modelo

if (isset($_GET['a']))
{
	$producto = new Productos_modelo();

	$matrizProductos = $producto->get_productos();

	require ("../Vista/productos_vista.php"); //llamada a la vista*
}

if (isset($_GET['id']))
{
	$id = $_GET['id'];

	$producto = new Productos_modelo();

	$producto->borrar_producto($id);

	header("location: ../Vista/MenuAdmin_vista.html");
}

if (isset($_POST['id']))
{
	//print_r($_POST);

	$producto = new Productos_modelo();

	$id = $_POST['id'];
	$nom = $_POST['nom'];
	$pre = $_POST['pre'];
	$descu = $_POST['descu'];
	$ven = $_POST['ven'];
	$ima = $_POST['ima'];
	$descr = $_POST['descr'];

	$producto->set_productos($id, $nom, $pre, $descu, $ven, $ima, $descr);

	header ("location: ../Vista/MenuAdmin_vista.html");
}	

if (isset($_GET['b']))
{
	$producto = new Productos_modelo();

	//print_r($_POST);

	$nom = $_POST['nom'];
	$pre = $_POST['pre'];
	$descu = $_POST['descu'];
	$ven = $_POST['ven'];
	$ima = $_POST['ima'];
	$descr = $_POST['descr'];

	$producto->insertar_producto($nom, $pre, $descu, $ven, $ima, $descr);

	header ("location: ../Vista/MenuAdmin_vista.html");
}

if (isset($_GET['c']))
{
	$compra = new Productos_modelo();

	$matrizCompras = $compra->Compra_producto();

	require ("../Vista/compras_vista.php"); //llamada a la vista*
}

?>