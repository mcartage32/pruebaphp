<?php
require_once "conexion.php";
class Productomodelo 
{
 private $db;
 private $producto;


public function __construct()
    {   
        $db2= new Basedatos();
        $this->db = $db2->conectar();
        $this->producto = array();
    }

public function get_productos()
{
    $sql="SELECT * FROM producto";
    $res=$this->db->query($sql);
    while($fila=$res->fetch_assoc())
    {
        $this->producto[]=$fila;
    }
    return $this->producto;
}


public function insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fechacrea,$fechaventa)
{
     $res=$this->db->query("INSERT INTO producto(nombre,referencia,precio,peso,categoria,stock,fecha creacion,fecha ultima venta) 
     VALUES('$nombre','$referencia','$precio','$peso','$categoria','$stock',$fechacrea,$fechaventa)");
     
     if($res)
     {return "si se guardo";}
     else
     {return "no se guardo";}

}















}




?>