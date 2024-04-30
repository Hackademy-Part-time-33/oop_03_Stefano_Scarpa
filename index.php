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
        echo "Titolo: {$this->title} \n" . "Categoria:" . $this->category->getMyCategory() . "\n" . "Tags: {$this->tags} \n";
    }
}

$post1 = new Post("Titolo 1", $attualita, "tag1");
$post2 = new Post("Titolo 2", $sport, "tag2");
$post3 = new Post("Titolo 3", $gossip, "tag3");

$post1 -> viewPost();
$post2 -> viewPost();
$post3 -> viewPost();