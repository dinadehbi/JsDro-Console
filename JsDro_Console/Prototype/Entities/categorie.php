<?php

class Categorie {
    
    private $image;
    private $title;

    public function __construct($title, $image){
        $this->title = $title;
        $this->image = $image;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getImage(){
        return $this->image;
    }

    public function setImage($image){
        $this->image = $image;
    }
    public function updateCategorie($title, $image) {
        $this->setTitle($title);
        $this->setImage($image);
    }
    
   
}

?>