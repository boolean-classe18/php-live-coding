<?php

// Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
// Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.

// leggo la mail passata in GET
$email = $_GET['email'];

/********** soluzione 1 **********/
// verifico se esiste un punto nella mail (1)
if(strpos($email, '.') !== false) {
    // se sì (1), verifico se esiste una chiocciola nella mail (2)
    if(strpos($email, '@') !== false) {
        // se sì (2), stampo "OK"
        echo "OK";
    } else {
        // se no (2), stampo "KO"
        echo "KO";
    }
} else {
    // se no (1), stampo "KO"
    echo "KO";
}
?>
<br>
<?php
/********** soluzione 2 **********/
// verifico che ci siano un punto e una chiocciola nell'email
if(strpos($email, '.') !== false && strpos($email, '@') !== false) {
    // se ci sono entrambi, stampo "OK"
    echo "OK";
} else {
    // altrimenti, stampo "KO"
    echo "KO";
}
?>
<br>
<?php
/********** soluzione 3 **********/
// verifico la mancanza di un punto o di una chiocciola
if(strpos($email, '.') === false || strpos($email, '@') === false) {
    // se manca almeno un simbolo tra punto e chiocciola, stampo "KO"
    echo "KO";
} else {
    // altrimenti (ci sono entrambi), stampo "OK"
    echo "OK";
}

?>
