<?php

abstract class Equipment{
    abstract public function equipment();
}

class Martello extends Equipment{
    public function equipment(){
        echo "Prendi il mio martello\n";
    }
}

class Razzi extends Equipment{
    public function equipment(){
        echo "Attivo i razzi\n"; 
    }
};