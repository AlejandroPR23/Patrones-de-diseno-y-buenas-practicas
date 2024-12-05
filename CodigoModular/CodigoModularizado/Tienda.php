<?php 

class Tienda
{
    private $productos = array();
    private $proveedores = array();
    private $compradores = array();
    private $ventas = array();

    public function agregarProducto($producto)
    {
        $this->productos[] = $producto;
    }

    public function agregarProveedor($proveedor)
    {
        $this->proveedores[] = $proveedor;
    }

    public function agregarComprador($comprador)
    {
        $this->compradores[] = $comprador;
    }

    public function agregarVenta($venta)
    {
        $this->ventas[] = $venta;
    }

    public function obtenerProductos()
    {
        return $this->productos;
    }

    public function obtenerProveedores()
    {
        return $this->proveedores;
    }

    public function obtenerCompradores()
    {
        return $this->compradores;
    }

    public function obtenerVentas()
    {
        return $this->ventas;
    }
}   