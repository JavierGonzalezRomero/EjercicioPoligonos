<?php
 
 require_once "Poligono.php";



 class Rectangulo extends Poligono{

    private float $base;
    private float $altura;

    public function calcularArea(){

       return $this -> base * $this -> altura;

    }

    public function __construct(float $base,float $altura)
    {
       $this -> base = $base ;
       $this -> altura = $altura ;
    }
   

 }