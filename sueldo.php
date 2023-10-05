<?php
$totalVendido = $_POST["totalVendido"];
$hijosEscolar = $_POST["hijosEscolar"];

$sueldoBasico = 600;
$bonificacionPorHijo = 50;
$porcentajeComision = 7.5;
$porcentajeDescuento = 11;

$comision = ($totalVendido * $porcentajeComision) / 100;

$bonificacion = $bonificacionPorHijo * $hijosEscolar;

$sueldoBruto = $sueldoBasico + $comision + $bonificacion;

$descuento = ($sueldoBruto * $porcentajeDescuento) / 100;

$sueldoNeto = $sueldoBruto - $descuento;

echo "<h2>Resultados:</h2>";
echo "<p>Comisión: S/. $comision</p>";
echo "<p>Bonificación: S/. $bonificacion</p>";
echo "<p>Sueldo Bruto: S/. $sueldoBruto</p>";
echo "<p>Descuento: S/. $descuento</p>";
echo "<p>Sueldo Neto: S/. $sueldoNeto</p>";
?>

