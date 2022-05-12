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
        if(!is_int($_price)){
            throw new Exception('Is not a number');
        }
        $this -> price = $_price;
        
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
    public $deadline;
  

    //costruttore 
    public function __construct($_name, $_surname, $_email, $_credit, $_deadline){
        $this -> setName($_name);
        $this -> setSurname($_surname);
        $this -> setEmail($_email);
        $this -> setCreditCard($_credit);
        $this -> setDeadline($_deadline);
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
        //setto variabile data di oggi
        // $todays_date = date("d-m-Y");
        $deadline = $_deadline;
        //trasformo le date di oggi in secondi per compararle 
        $today_stamp = strtotime("now");
        $deadline_stamp = strtotime($deadline);
        //condizione se òa carta è scaduta
        if($deadline_stamp < $today_stamp){
            $this -> deadline = "la tua carta è scaduta";
            return $this;
            } else {
                $this -> deadline = "procedi con gli acquisti";
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
}

?>