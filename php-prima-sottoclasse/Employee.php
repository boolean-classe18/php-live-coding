<?php

require_once 'User.php';

class Employee extends User {
    public $level;

    function __construct($_name = "", $_lastname = "", $_level = 1) {
        // invoco il costruttore dela classe padre
        parent::__construct($_name, $_lastname);
        $this->level = $_level;

    }

    // funzione polimorfa
    public function setSale() {
        // devo usare la funzione getAge perché $age è privata
        if($this->getAge() > 60) {
            $this->sale = 30;
        } elseif($this->level > 3) {
            $this->sale = 20;
        } else {
            $this->sale = 0;
        }
    }

}

?>
