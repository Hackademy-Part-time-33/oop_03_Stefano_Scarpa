<?php

require('class.php');

class Post {
    public $title;
    public $category;
    public $tags;

    public function __construct($title, $category, $tags) {
        $this -> title = $title;
        $this -> category = $category;
        $this -> tags = $tags;
    }

    public function viewPost() {
        echo "Titolo: {$this->title} \n"; 
        echo "Categoria: " . $this->category->getMyCategory();
        echo "Tags: {$this->tags} \n";
    }
}

$post1 = new Post("Titolo 1", new Attualita(), "tag1");
$post2 = new Post("Titolo 2", new Sport(), "tag2");
$post3 = new Post("Titolo 3", new Gossip(), "tag3");

$post1 -> viewPost();
$post2 -> viewPost();
$post3 -> viewPost();