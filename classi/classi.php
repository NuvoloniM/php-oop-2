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

class User {
    public $name;
    public $surname;
    public $email;
    public $credit;
    public $_deadline;
    public $_signed;
    public $_sconto;

    //costruttore 
    public function __construct($_name, $_surname, $_email, $_credit, $_deadline, $_signed){
        $this -> setName($_name);
        $this -> setSurname($_surname);
        $this -> setEmail($_email);
        $this -> setCreditCard($_credit);
        $this -> setDeadline($_deadline);
        $this -> setSigned($_signed);
        $this -> setSconto($_signed);
    }

    // setter
    public function setName($_name){
        $this -> name = $_name;
        return $this;
    }
    public function setSurname($_surname){
        $this -> surname = $_surname;
        return $this;
    }
    public function setEmail($_email){
        $this -> email = $_email;
        return $this;
    }
    public function setCreditCard($_credit){
        $this -> credit = $_credit;
        return $this;
    }
    public function setDeadline($_deadline){
        $this -> deadline = $_deadline;
        return $this;
    }
    public function setSigned($_signed){
        $this -> signed = $_signed;
        return $this;
    }
    public function setSconto($_signed){
        if ($_signed == true){
            $this -> sconto = 0.2;
            return $this;
        }
    }
    //getter
    public function getName(){
        return $this -> name;
    }
    public function getSurname(){
        return $this -> surname;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getCreditCard(){
        return $this -> signed;
    }
    public function getDeadline(){
        return $this -> deadline;
    }
    public function getSigned(){
        return $this -> signed;
    }
    public function getSconto(){
        return $this -> sconto;
    }
}

?>