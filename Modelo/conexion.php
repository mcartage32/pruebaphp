<?php

class Basedatos
{
 private $servidor;
 private $base;
 private $usu;
 private $pass;
 private $conexion;

public function conectar()
    {   $this->servidor = "localhost";
        $this->base= "prueba";
        $this->usu = "root";
        $this->pass = "";
        $this->conexion = new mysqli($this->servidor,$this->usu,$this->pass,$this->base);
        return $this->conexion;
    }

public function cerrarconexion()
    {  
        $this->conexion->close();
    }





















}




?>