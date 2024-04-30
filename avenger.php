<?php

require('attack.php');
require('equipment.php');

abstract class Avenger {
    public $attack;
    public $equipment;

    public function __construct(Attack $attack, Equipment $equipment){
        $this -> attack = $attack;
        $this -> equipment = $equipment;
    }

};

$ironman = new Avenger(new LanciaRazzi, new Razzi);
$thor = new Avenger(new ColpoMartello, new Martello);

$ironman->attack->attacca();
$thor->attack->attacca();

$ironman->equipment->equipment();
$thor->equipment->equipment();

