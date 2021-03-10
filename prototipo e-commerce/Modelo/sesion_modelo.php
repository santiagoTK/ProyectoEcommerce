<?php

class sesionUsuario
{
	public function __construct()
	{
		session_start();
	}

	public function setSession($username)
	{
		$_SESSION['mysession'] = $username;
	}

	public function getSession()
	{
		return $_SESSION['mysession'];
	}

	public function closeSession()
	{
		session_unset();
		session_destroy();
	}
}

?>