<?php 
class Products {
    public $name;
    public $price;
    public $id;

    //Costruttore
    public function __construct($_name , $_price){
        $this -> setName($_name);
        $this -> setPrice($_price);
        $this -> setId();
    }

    //setter
    public function setName($_name){
        $this -> name = $_name;
        return $this;
    }
    public function setPrice($_price){
        $this -> price = $_price;
        return $this;
    }
    public function setId(){
        $this -> id = rand(1000,9999);
        return $this;
    }

    //Getter
    public function getName(){
        return $this -> name;
    }
    public function getPrice(){
        return $this -> price;
    }
    public function getId(){
        return $this -> id;
    }
}

?>