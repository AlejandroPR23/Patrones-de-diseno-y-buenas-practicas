<?php 
class Proveedor
{
    private $nombre;
    private $direccion;

    public function __construct($nombre, $direccion)
    {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function obtenerDireccion()
    {
        return $this->direccion;
    }
}