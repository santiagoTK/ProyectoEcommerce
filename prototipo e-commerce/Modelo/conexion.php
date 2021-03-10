<?php 

class Conexion
{
	public $server;
	public $user;
	public $pass;
	public $dbname;

	public $connection;

	public function __construct(){

		$this->server = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->dbname = 'bd_prueba';

		$this->connection = new mysqli($this->server, $this->user, $this->pass, $this->dbname);

		if($this->connection->connect_errno){
			echo "Conexión a base de datos fallida " . $this->connection->connect_error;
		}
	}	
}

?>