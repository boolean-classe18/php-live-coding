<?php
// leggo il parametro "nome" dalla querystring
$nome = $_GET['nome'];

// suddivido una frase nelle varie parole che la compongono
$frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$parole = explode(" ", $frase);

// sostituisco una porzione di una stringa
$saluto = "ciao Pippo";
$saluto_replace = str_replace('Pippo', 'Pluto', $saluto);

// cerco la posizione di una sottostringa
$alfabeto = 'abcdef';
$pos = strpos($alfabeto, 'a');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Playground</title>
    </head>
    <body>
        <h1>
            Ciao <?php echo $nome ?>
        </h1>

        <pre>
        <?php var_dump($parole); ?>
        <?php var_dump($saluto); ?>
        <?php var_dump($saluto_replace); ?>
        <?php var_dump($pos); ?>
        </pre>

    </body>
</html>
