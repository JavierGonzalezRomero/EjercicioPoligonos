<?php


require_once "Cuadrado.php";
require_once "Rectangulo.php";

$newCuadrado = new Cuadrado(25);

echo $newCuadrado -> calcularArea();

$newRectangulo = new Rectangulo (5,8);

echo "rectangulo {$newRectangulo->calcularArea()}"; 