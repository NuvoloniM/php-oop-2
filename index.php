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

//istanzio prodotti
$toy1 = new Products ("Osso di plastica" , 3,);
$crocchetteA = new Food ( "Crocchette al pollo", 5, "MAG", "Pollo", "A", "4" );
$pateC = new Food ( "Patè di salmone", 6, "GIU", "Salmone", "D", "2" );

//istanzio user
$user1 = new SignedUser ("Marco", "Rossi", "marcorossi@gmail.com", "aslb343545", "10-03-2023", false )

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
        <div class="row">
            <div class="col-8">
                <div class="row row-cols-2 py-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $toy1 -> getName() ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $toy1 -> getPrice() * $user1 -> getSconto() ?> €</h6>
                                <p class="card-text"><?php echo $toy1 -> getId() ?></p>
                                <a href="#" class="card-link">Inserisci nel carrello</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $crocchetteA -> getName() ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> getPrice() * $user1 -> getSconto()?> €</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> getScadenza() ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $crocchetteA -> getProtein() ?></h6>
                                <p class="card-text"><?php echo $crocchetteA -> getId() ?></p>
                                <a href="#" class="card-link">Inserisci nel carrello</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $pateC -> getName() ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> getPrice() * $user1 -> getSconto()?> €</h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> getScadenza() ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $pateC -> getProtein() ?></h6>
                                <p class="card-text"><?php echo $pateC -> getId() ?></p>
                                <a href="#" class="card-link">Inserisci nel carrello</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="./img/user.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user1 -> getName() . " " . $user1 -> getSurname() ?></h5>
                        <p class="card-text"><?= $user1 -> getEmail() ?></p>
                        <p class="card-text"><?= $user1 -> getUserId() ?></p>
                        <p class="card-text"><?= $user1 -> getDeadline() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>