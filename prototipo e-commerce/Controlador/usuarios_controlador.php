<?php 

require ("../Modelo/usuarios_modelo.php"); //llamada al modelo

if (isset($_GET['a']))
{
	$usuario = new Usuarios_modelo();

	$matrizUsuarios = $usuario->get_usuarios();

	require ("../Vista/usuarios_vista.php"); //llamada a la vista*
}

if (isset($_GET['id']))
{
	$id = $_GET['id'];

	$usuario = new Usuarios_modelo();

	$usuario->borrar_usuario($id);

	header("location: ../Vista/MenuAdmin_vista.html");
}

if (isset($_POST['id']))
{
	//print_r($_POST);

	$usuario = new Usuarios_modelo();

	$id = $_POST['id'];
	$nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$doc = $_POST['doc'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$dir = $_POST['dir'];

	$usuario->set_usuarios($id, $nom, $ape, $doc, $email, $tel, $dir);

	header ("location: ../Vista/MenuAdmin_vista.html");
}	

if (isset($_GET['b']))
{
	$usuario = new Usuarios_modelo();

	//print_r($_POST);

	$nom = $_POST['nom'];
	$ape = $_POST['ape'];
	$doc = $_POST['doc'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$dir = $_POST['dir'];

	$usuario->insertar_usuario($nom, $ape, $doc, $email, $tel, $dir);

	header ("location: ../Vista/MenuAdmin_vista.html");
}

?>