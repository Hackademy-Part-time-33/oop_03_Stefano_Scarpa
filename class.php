<?php
// Traccia 1

abstract class Category {
    abstract public function getMyCategory();
}

class Attualita extends Category {
    public function getMyCategory() {
        echo "Attualita' \n";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        echo "Sport \n";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip \n";
    }
}

class Storia extends Category {
    public function getMyCategory() {
        echo "Storia \n";
    }
}

$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

$attualita -> getMyCategory();
$sport -> getMyCategory();
$gossip -> getMyCategory();
$storia -> getMyCategory();
