<?php
define("NOMBRE", "Nombre: Juan Manuel Jaramillo Ortiz");
echo constant('NOMBRE');
echo "<br>";
define("MATERIA", "Materia: Programación");
echo constant('MATERIA');

define("N1",0.15);
$Numero1=rand(1,5);
$a=0.15*$Numero1;
define("N2",0.20);
$Numero2=rand(1,5);
$b=0.20*$Numero2;
define("N3",0.25);
$Numero3=rand(1,5);
$c=0.25*$Numero3;
define("N4",0.40);
$Numero4=rand(1,5);
$d=0.40*$Numero4;
$Notafinal=$a+$b+$c+$d;
echo "<br>";echo "<br>";
echo "La nota 1 es: ".$Numero1;
echo "<br>";
echo "La nota 2 es: ".$Numero2;
echo "<br>";
echo "La nota 3 es: ".$Numero3;
echo "<br>";
echo "La nota 4 es: ".$Numero4;
echo "<br>";echo "<br>";
echo "La nota final es: ".$Notafinal;
echo "<br>";

if ($Notafinal<3){
    echo "El estudiante REPROBO :(";
}else{
    echo "El estudiante APROBO :)";
}




