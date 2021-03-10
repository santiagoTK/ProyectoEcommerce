<?php 

require ("../Modelo/proveedores_modelo.php"); //llamada al modelo

if (isset($_GET['a']))
{
	$proveedor = new Proveedores_modelo();

	$matrizProveedores = $proveedor->get_proveedores();

	require ("../Vista/proveedores_vista.php"); //llamada a la vista*
}

if (isset($_GET['id']))
{
	$id = $_GET['id'];

	$proveedor = new Proveedores_modelo();

	$proveedor->borrar_proveedor($id);

	header("location: ../Vista/MenuAdmin_vista.html");
}

if (isset($_POST['id']))
{
	//print_r($_POST);

	$proveedor = new Proveedores_modelo();

	$id = $_POST['id'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$dir = $_POST['dir'];
	$email = $_POST['email'];
	$est = $_POST['est'];

	$proveedor->set_proveedores($id, $nom, $tel, $dir, $email, $est);

	header ("location: ../Vista/MenuAdmin_vista.html");
}	

if (isset($_GET['b']))
{
	$proveedor = new Proveedores_modelo();

	//print_r($_POST);

	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$dir = $_POST['dir'];
	$email = $_POST['email'];
	$est = $_POST['est'];

	$proveedor->insertar_proveedor($nom, $tel, $dir, $email, $est);

	header ("location: ../Vista/MenuAdmin_vista.html");
}

?>