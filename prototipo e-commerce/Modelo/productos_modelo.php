<?php 

require "conexion.php";

class Productos_modelo extends Conexion{
    
    private $productos;     //variable para guardar los datos extraidos de la BBDD
    
    public function __construct() //el constructor conecta con la BBDD
    {
        parent::__construct();
        $this->productos = array();    //la variable debe ser un array para guardar los datos de la BBDD 
    }
    
    public function get_productos()
    {
        $sql = "SELECT * FROM PRODUCTO";
        $consulta = $this->connection->query($sql);
        
        while($fila = $consulta->fetch_assoc())
        {
            $this->productos[] = $fila;
        }
        return $this->productos;
    }   

//------------------------------------------------------------------------------
    public function set_productos($id, $nom_prod, $prec_prod, $desc_prod, $venc_prod, $imag_prod, $descr_prod)
    {
        $sql = "UPDATE PRODUCTO SET Nom_prod = '$nom_prod', Prec_prod = '$prec_prod', Descu_prod = '$desc_prod', Fech_venc = '$venc_prod', Imag_prod = '$imag_prod', Descr_prod = '$descr_prod' WHERE idProducto = $id";
        $this->connection->query($sql);
    }

    
    public function borrar_producto($id)
    {
        $sql = "DELETE FROM PRODUCTO WHERE idProducto = $id";
        $this->connection->query($sql);
    }

    public function insertar_producto($nom_prod, $prec_prod, $desc_prod, $venc_prod, $imag_prod, $descr_prod)
    {
        $sql = "INSERT INTO PRODUCTO (Nom_prod, Prec_prod, Descu_prod, Fech_venc, Imag_prod, Descr_prod) 
                VALUES ('$nom_prod', '$prec_prod', '$desc_prod', '$venc_prod', '$imag_prod', '$descr_prod')";
        $this->connection->query($sql);
    }

    public function Compra_producto()
    {
        $sql = "SELECT Nom_prod, Prec_prod, Cant, Fech_comp, Tipo_pago, Nom1_Us, Ape1_Us FROM usuario INNER JOIN compra ON idUsuario = Usuario_idUsuario INNER JOIN método_pago ON Método_pago_idMétodo_pago = idMétodo_pago INNER JOIN detalle_compra ON idCompra = Compra_idCompra INNER JOIN producto ON Producto_idProducto = idProducto;";

        $consulta = $this->connection->query($sql);

        while($fila = $consulta->fetch_assoc())
        {
            $this->productos[] = $fila;
        }
        return $this->productos;
    }
}

?>