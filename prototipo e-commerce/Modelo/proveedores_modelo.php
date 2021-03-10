<?php 

require "conexion.php";

class Proveedores_modelo extends Conexion{
    
    private $proveedores;     //variable para guardar los datos extraidos de la BBDD
    
    public function __construct() //el constructor conecta con la BBDD
    {
        parent::__construct();
        $this->proveedores = array();    //la variable debe ser un array para guardar los datos de la BBDD 
    }
    
    public function get_proveedores()
    {
        $sql = "SELECT * FROM PROVEEDOR";
        $consulta = $this->connection->query($sql);
        
        while($fila = $consulta->fetch_assoc())
        {
            $this->proveedores[] = $fila;
        }
        return $this->proveedores;
    }   

//------------------------------------------------------------------------------
    public function set_proveedores($id, $nom, $tel, $dir, $email, $est)
    {
        $sql = "UPDATE PROVEEDOR SET Nom_prov = '$nom', Tel_prov = '$tel', Direc_prov = '$dir', Email_prov = '$email', Estado_prov = '$est' WHERE idProveedor = $id";
        $this->connection->query($sql);
    }

    
    public function borrar_proveedor($id)
    {
        $sql = "DELETE FROM PROVEEDOR WHERE idProveedor = $id";
        $this->connection->query($sql);
    }

    public function insertar_proveedor($nom, $tel, $dir, $email, $est)
    {
        $sql = "INSERT INTO PROVEEDOR (Nom_prov, Tel_prov, Direc_prov, Email_prov, Estado_prov) 
                VALUES ('$nom', '$tel', '$dir', '$email', '$est')";
        $this->connection->query($sql);
    }
}

?>