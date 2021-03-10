<?php 

require "conexion.php";

class Usuarios_modelo extends Conexion{
    
    private $usuarios;     //variable para guardar los datos extraidos de la BBDD
    
    public function __construct() //el constructor conecta con la BBDD
    {
        parent::__construct();
        $this->usuarios = array();    //la variable debe ser un array para guardar los datos de la BBDD 
    }
    
    public function get_usuarios()
    {
        $sql = "SELECT * FROM USUARIO";
        $consulta = $this->connection->query($sql);
        
        while($fila = $consulta->fetch_assoc())
        {
            $this->usuarios[] = $fila;
        }
        return $this->usuarios;
    }   

//------------------------------------------------------------------------------
    public function set_usuarios($id, $nom, $ape, $doc, $email, $tel, $dir)
    {
        $sql = "UPDATE USUARIO SET Nom1_Us = '$nom', Ape1_Us = '$ape', Doc_Us = '$doc', Email_Us = '$email', Tel_Us = '$tel', Direc_Us = '$dir' WHERE idUsuario = $id";
        $this->connection->query($sql);
    }

    
    public function borrar_usuario($id)
    {
        $sql = "DELETE FROM USUARIO WHERE idUsuario = $id";
        $this->connection->query($sql);
    }

    public function insertar_usuario($nom, $ape, $doc, $email, $tel, $dir)
    {
        $sql = "INSERT INTO USUARIO (Nom1_Us, Ape1_Us, Doc_Us, Email_Us, Tel_Us, Direc_Us) 
                VALUES ('$nom', '$ape', '$doc', '$email', '$tel', '$dir')";
        $this->connection->query($sql);
    }
}

?>