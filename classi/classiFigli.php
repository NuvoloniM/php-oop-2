<?php
//importo file con classe padre
include __DIR__ . '/classi.php';
include __DIR__ . '/traits.php';

//estendo la classe product (padre) e creo una classe figlio
class Food extends Products {
    //proprietà esclusive di Food
    public $scadenza;
    public $protein;
    use Position;

    //Costruttore figlio
    public function __construct($_name, $_price, $_scadenza, $_protein, $_aisle, $_shelf){
        //importo i setter del padre 
        parent::__construct($_name, $_price);
        $this -> setScadenza($_scadenza);
        $this -> setProtein($_protein);
        $this -> setAisle($_aisle);
        $this -> setShelf($_shelf);
    }

    //setter figlio
    public function setScadenza($_scadenza){
        $this -> scadenza = $_scadenza;
        return $this;
    }
    public function setProtein($_protein){
        $this -> protein = $_protein;
        return $this;
    }
    public function setAisle($_aisle){
        $this -> aisle = $_aisle;
    }
    public function setShelf($_shelf){
        $this -> shelf = $_shelf;
    }

    //getter figlio 
    public function getScadenza(){
        return $this -> scadenza;
    }
    public function getProtein(){
        return $this -> protein;
    }
    public function getAisle(){
        return $this -> aisle;
    }
    public function getShelf(){
        return $this -> shelf;
    }
}

class SignedUser extends User {
    //proprietà esclusiva di SignedUser
    public $userId;
    public $signed;
    public $sconto;

    //Costruttore figlio 
    public function __construct($_name, $_surname, $_email, $_credit, $_deadline, $_signed){
        //importo i setter del padre 
        parent::__construct($_name, $_surname, $_email, $_credit, $_deadline);
        //attributi constructor del figlio
        $this -> setUserId();
        $this -> setSigned($_signed);
        $this -> setSconto($_signed);
    }

    //setter figlio 
    public function setUserId(){
        for ($i=0; $i < 6; $i++) { 
            $this -> userId .= rand(1,9);
        }
    }
    public function setSigned($_signed){
        $this -> signed = $_signed;
        return $this;
    }
    public function setSconto($_signed){
        if ($_signed == true){
            $this -> sconto = 0.8;
            return $this;
        } else {
            $this -> sconto = 1;
            return $this;
        }
    }
    //getter figlio 
    public function getUserId(){
        return $this -> userId;
    }
    public function getSigned(){
        return $this -> signed;
    }
    public function getSconto(){
        return $this -> sconto;
    }
}