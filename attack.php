<?php

// traccia 3

abstract class Attack{
    abstract public function attacca();
}

class LanciaRazzi extends Attack{
    public function attacca(){
        echo "lancia i razzi!\n";
    }
}

class ColpoMartello extends Attack{
    public function attacca(){
        echo "complisci con il martello!\n";
    }
}