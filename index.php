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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E-commerce</title>
</head>
<body>
    <div class="container">
        <div class="row row-cols-4 py-5">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $toy1 -> name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $toy1 -> price?>,00€</h6>
                        <p class="card-text"><?php echo $toy1 -> id ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $crocchetteA -> name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> price ?>,00€</h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> scadenza ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> protein ?></h6>
                        <p class="card-text"><?php echo $crocchetteA -> id ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $pateC -> name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> price ?>,00€</h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> scadenza ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> protein ?></h6>
                        <p class="card-text"><?php echo $pateC -> id ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>