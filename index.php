<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi 
// e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili 
// solo in un periodo particolare (es. da maggio ad agosto).

// Importo file classiFigli.php che a sua volta importa Classi.php

include __DIR__ . '/classi/classiFigli.php';


$toy1 = new Products ("Osso di plastica" , 3,);
$crocchetteA = new Food ( "Crocchette al pollo", 5, "MAG", "Pollo" );
$pateC = new Food ( "Patè di salmone", 6, "GIU", "Salmone" );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>