<?php
require_once "Modelo/conexion.php";
require_once "Controlador/productoscontroller.php";

$control = new Productocontroller();

if(isset($_GET['c']))
{
    if($_GET['c']=="insertar")
    {$control ->insertar();}
    
}

    else
    {
    $control ->index();
    }

?>