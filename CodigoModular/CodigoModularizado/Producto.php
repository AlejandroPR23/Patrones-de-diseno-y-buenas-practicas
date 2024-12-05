<?php 

class Producto
{
    private $nombre;
    private $precio;
    private $proveedor;

    public function __construct($nombre, $precio, $proveedor)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->proveedor = $proveedor;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function obtenerPrecio()
    {
        return $this->precio;
    }

    public function obtenerProveedor()
    {
        return $this->proveedor;
    }
}
