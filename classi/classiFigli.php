<?php
//importo file con classe padre
include __DIR__ . '/classi.php';

//estendo la classe product (padre) e creo una classe figlio
class Food extends Products {
    //proprietà esclusive di Food
    public $scadenza;
    public $protein;

    //Costruttore figlio
    public function __construct($_name, $_price, $_scadenza, $_protein){
        //importo i setter del padre 
        parent::__construct($_name, $_price);
        $this -> setScadenza($_scadenza);
        $this -> setProtein($_protein);
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

    //getter figlio 
    public function getScadenza(){
        return $this -> scadenza;
    }
    public function getProtein(){
        return $this -> protein;
    }
}


?>