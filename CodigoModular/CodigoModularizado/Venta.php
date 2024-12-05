<?php 

class Venta
{
    private $producto;
    private $comprador;
    private $fecha;

    public function __construct($producto, $comprador, $fecha)
    {
        $this->producto = $producto;
        $this->comprador = $comprador;
        $this->fecha = $fecha;
    }

    public function obtenerProducto()
    {
        return $this->producto;
    }

    public function obtenerComprador()
    {
        return $this->comprador;
    }

    public function obtenerFecha()
    {
        return $this->fecha;
    }
}
