<?php
 
 require_once "Poligono.php";



 class Cuadrado extends Poligono{

    private float $lado;

    public function calcularArea(){

       return $this -> lado**2;

    }

    public function __construct(float $lado)
    {
       $this -> lado = $lado ;
    }
   

 }