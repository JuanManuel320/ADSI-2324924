<?php
define("IVA",0.19);
define("precioU",43000);
$cantidadP=15;
$ValorIVA=($cantidadP*precioU)*0.19;
$ValorsinIVA=($cantidadP*precioU);
$ValorMasIVA=($cantidadP*precioU)+$ValorIVA;

echo "El valor sin IVA es: ".$ValorsinIVA;
echo "<br>";
echo "El valor con IVA es: ".$ValorIVA;
echo "<br>";
echo "El valor mas el IVA es: ".$ValorMasIVA;



