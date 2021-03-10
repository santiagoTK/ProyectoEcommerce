<?php 

require "conexion.php";

class Usuario_login extends Conexion
{
	private $nom_usuario;
	private $resultado;

	public function Usuario_exist($user, $pass)
	{
		$sql = "SELECT * FROM login WHERE Usuario = '$user' AND Contraseña = '$pass'";
		$this->resultado = $this->connection->query($sql);
		$num_filas = $this->resultado->num_rows;

		if ($num_filas == 1)
		{
			return True;
		}
	}

	public function NomUsuario()
	{
		foreach ($this->resultado as $valor)
		{
			$this->nom_usuario = $valor["Usuario"];
		}
	}

	public function getNomUsuario()
	{
		return $this->nom_usuario;
	}
}

?>