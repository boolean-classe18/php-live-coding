<?php

require_once 'User.php';
require_once 'Employee.php';

// creo una nuova istanza della classe User
$user1 = new User('Mario', 'Rossi');

// blocco try-catch per catturare eventuali eccezioni lanciate dalla funzione setAge()
try {
    // uso la funzione setAge() perché la proprietà $age è privata
    $user1->setAge(-5);
} catch(Exception $e) {
    echo 'Si è verificato il seguente errore: ' . $e->getMessage();
}
$user1->setSale();
var_dump($user1);

// creo una nuova istanza della classe Employee
$employee1 = new Employee('Luca', 'Verdi', 4);

// blocco try-catch per catturare eventuali eccezioni lanciate dalla funzione setAge()
try {
    // uso la funzione setAge() perché la proprietà $age è privata
    $employee1->setAge(50);
} catch(Exception $e) {
    echo 'Si è verificato il seguente errore: ' . $e->getMessage();
}
$employee1->setSale();
var_dump($employee1);

// creo una nuova istanza della classe Employee con i valori di default
$employee2 = new Employee();
var_dump($employee2)


?>
