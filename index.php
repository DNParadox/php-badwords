<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->


<?php 
// Creiamo una stringa con contenuto a nostro piacere
$testo1 = "Le automazioni in iOS non sono per niente userfriendly.";
// Creiamo una seconda var dove modificheremo con il comando str_replace la parola "iOS"
// con un'altra che recupereremo dal comando $_get indicandone la stringa
// Otteniamo quindi una nuova stringa con il valore get a piacimento del client-side 
$testo2 = str_replace("iOS", $_GET['name'] , $testo1);
// Comando che stampa la lunghezza della stringa
strlen($string);

?> 


<h1> Esercizio di censura: testo originale </h1>

<p>  <?php echo $testo1 ?> </p>

<h2>Esercizio di censura: testo censurato</h2>

<p> <?php echo $testo2 ?></p>  

<div> La lunghezza della stringa è :  <?php echo strlen($testo1); ?> </div>



</body>
</html>