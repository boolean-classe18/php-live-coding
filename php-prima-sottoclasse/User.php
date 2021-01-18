<?php

class User {
    public $name;
    public $lastname;
    private $age;
    public $sale;

    function __construct($_name = "", $_lastname = "") {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    public function getName() {
        return $this->name;
    }

    public function printName() {
        echo $this->name;
    }

    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 120) {
            $this->age = $_age;
        } elseif(!is_numeric($_age)) {
            throw new Exception('age non è un numero!');
        } else {
            throw new Exception('numero non valido!');
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setSale() {
        if($this->age > 65) {
            $this->sale = 30;
        } else {
            $this->sale = 0;
        }
    }
}


?>
