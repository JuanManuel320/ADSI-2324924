<?php
define("NOMBRE", "Juan Manuel");
define("APELLIDO", "Jaramillo Ortiz");

echo constant('NOMBRE');
echo "<br>";
echo APELLIDO;
echo "<br>";
#Ejercicio de convercion
define("dolar",4000);
$d=rand(1,100);
$conversion=dolar*$d;
echo "Segun la cantidad de dolarucos:" .$d."<br>";
echo "Usted tiene en pesos colombianos la suma de $" .$conversion;