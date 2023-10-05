<?php
$precioGaseosa = $_POST["precio"]; 
$cantidadGaseosas = $_POST["cantgaseosa"];

$porcentajeRebaja = 5;
$porcentajeDescuento = 7;
$obsequioPorGaseosa = 2;

$nuevoPrecio = $precioGaseosa * (1 - $porcentajeRebaja / 100);

$importeCompra = $nuevoPrecio * $cantidadGaseosas;

$importeDescuento = $importeCompra * ($porcentajeDescuento / 100);

$importePagar = $importeCompra - $importeDescuento;

$cantidadObsequios = $obsequioPorGaseosa * $cantidadGaseosas;

echo "<h2>Resultados:</h2>";
echo "Nuevo precio de la gaseosa: S/. $nuevoPrecio<br>";
echo "Importe de la compra antes del descuento: S/. $importeCompra<br>";
echo "Importe del descuento: S/. $importeDescuento<br>";
echo "Importe a pagar: S/. $importePagar<br>";
echo "Obsequios (caramelos): $cantidadObsequios<br>";
?>
