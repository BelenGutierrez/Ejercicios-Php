<?php

include_once 'Animal.php';

abstract class Mamifero extends Animal {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($n, $s, $r);
    }

    public function mama() {
        return "Dame alimento";
    }

    public function pare() {
        return "Ayyyyyyy dolor";
    }

    public function corteja() {
        return "Demostraré mis dotes de enamoramiento";
    }

}
?>
    
