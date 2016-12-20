
<?php

include_once 'Animal.php';

class Lagarto extends Animal {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($n, $s, $r);
    }

    public function __toString() {
        return parent::__toString() . "<br>Nombre: $this->nombre  Sexo: $this->sexo  Raza: $this->raza";
    }
    
    public function sacaLengua() {
        return "Mira como saco mi bífida a velocidad de vértigo";
    }

    public function hiberna() {
        return "Adios, no vemos en unos meses";
    }

    public function repta() {
        return "Estoy reptando";
    }

}
?>
   
