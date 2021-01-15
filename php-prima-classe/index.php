<?php

class User {
    public $name;
    public $lastname;
    public $age;

    function __construct($_name, $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function getName() {
        return $this->name;
    }
}

// creo una nuova istanza della classe User
$pippo = new User('Pippo', 'Rossi');
// var_dump($pippo);

// stampo il nome dell'instanza $pippo
echo '<p>Nome della variabile "$pippo": ' . $pippo->getName() . '</p>';

// assegno un valore alla variabile "age" dell'istanza $pippo
$pippo->age = 30;
// stampo il valore della variabile "age" dell'istanza $pippo
echo '<p>Età della variabile "$pippo": ' . $pippo->age . '</p>';

// creo una nuova istanza della classe User
$pluto = new User('Pluto', 'Neri');

// stampo il nome dell'instanza $pluto
echo '<p>Nome della variabile "$pluto": ' . $pluto->getName() . '</p>';

// assegno un valore alla variabile "age" dell'istanza $pluto
$pluto->age = 70;

?>
