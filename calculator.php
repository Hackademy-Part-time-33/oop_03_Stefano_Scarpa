<?php

trait Calculator{
    public function sum($a, $b) { 
        return $a + $b;
     }
     
     public function sub($a, $b) { 
        return $a - $b;
     }
     
     public function mul($a, $b) {
        return $a * $b;
     }
     
     public function div($a, $b) {
        return $a / $b;
     }
     
     public function sqr($a){
        return sqrt($a);
     }    
};

class Rettangolo{
    use Calculator;

    public $base;
    public $altezza;

    public function __construct($_base,$_altezza){
        $this->base=$_base;
        $this->altezza=$_altezza;
    }

    public function Area(){
        echo "Area: {$this->mul($this->base,$this->altezza)} \n";
    }

    public function Perimetro(){
        echo "Perimetro: ". $this->mul(2,$this->base) + $this->mul(2,$this->altezza). "\n"; 
    }

    public function Diagonale(){
        echo "Radice quadrata: " . $this->sqr(pow($this->altezza,2) + pow($this->base,2)). "\n";
    }
};

$rettangolo = new Rettangolo (10,45);
$rettangolo->Area();
$rettangolo->Perimetro();
$rettangolo->Diagonale();