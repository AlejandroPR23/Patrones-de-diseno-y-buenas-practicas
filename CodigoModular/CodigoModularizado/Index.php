<?php 
require_once('./Tienda.php');
require_once('./Producto.php');
require_once('./Proveedor.php');
require_once('./Comprador.php');
require_once('./Venta.php');


$tienda = new Tienda();

$producto1 = new Producto("Laptop", 1000, "Proveedor A");
$producto2 = new Producto("Smartphone", 500, "Proveedor B");

$proveedor1 = new Proveedor("Proveedor A", "Calle 1");
$proveedor2 = new Proveedor("Proveedor B", "Calle 2");

$comprador1 = new Comprador("Comprador 1", "Calle 3");
$comprador2 = new Comprador("Comprador 2", "Calle 4");

$tienda->agregarProducto($producto1);
$tienda->agregarProducto($producto2);
$tienda->agregarProveedor($proveedor1);
$tienda->agregarProveedor($proveedor2);
$tienda->agregarComprador($comprador1);
$tienda->agregarComprador($comprador2);

$venta1 = new Venta($producto1, $comprador1, "2022-01-01");
$venta2 = new Venta($producto2, $comprador2, "2022-01-02");

$tienda->agregarVenta($venta1);
$tienda->agregarVenta($venta2);

$productos = $tienda->obtenerProductos();
$proveedores = $tienda->obtenerProveedores();
$compradores = $tienda->obtenerCompradores();
$ventas = $tienda->obtenerVentas();

echo "Productos:\n";
foreach ($productos as $producto) {
    echo $producto->obtenerNombre() . " - " . $producto->obtenerPrecio() . " - " . $producto->obtenerProveedor() . "\n";
}

echo "Proveedores:\n";
foreach ($proveedores as $proveedor) {
    echo $proveedor->obtenerNombre() . " - " . $proveedor->obtenerDireccion() . "\n";
}

echo "Compradores:\n";
foreach ($compradores as $comprador) {
    echo $comprador->obtenerNombre() . " - " . $comprador->obtenerDireccion() . "\n";
}

echo "Ventas:\n";
foreach ($ventas as $venta) {
    echo $venta->obtenerProducto()->obtenerNombre() . " - " . $venta->obtenerComprador()->obtenerNombre() . " - " . $venta->obtenerFecha() . "\n";
}