<?php

 class Productocontroller
 {    


     public function index()
     { require_once "Modelo/productomodelo.php";
       $producto = new Productomodelo();
       $data["producto"] = $producto-> get_productos();
       
       require_once "Vistas/vistaproductos.php";
     }


     public function insertar()
     {
        if(isset($_GET['a']))
        {
            $nombre = $_POST['nombre'];
            $referencia = $_POST['referencia'];
            $precio = $_POST['precio'];
            $peso = $_POST['peso'];
            $categoria = $_POST['categoria'];
            $stock = $_POST['stock'];
            $fechacrea = $_POST['fechacrea'];
            $fechaventa = $_POST['fechaventa'];
            
            require_once "Modelo/productomodelo.php";
            $producto = new Productomodelo();
            echo $producto->insertar($nombre,$referencia,$precio,$peso,$categoria,$stock,$fechacrea,$fechaventa);
          
            
        }  

        else
        {require_once "Vistas/vistainsertar.php";}
     }




















 }

?>