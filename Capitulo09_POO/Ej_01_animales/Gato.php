<?php

include_once 'Mamifero.php';

class Gato extends Mamifero {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($nombre, $sexo, $raza);
    }
    
    public function __toString() {
    return parent::__toString()."<br>Nombre: $this->nombre  Sexo: $this->sexo  Raza: $this->raza";
  }

    public function maulla() {
        return "Miauuuu";
    }

    public function ronronea() {
        return "rrrrrrrrrrrrrrrrrrr";
    }

    public function cazaRatones() {
        return "No quedará ni un ratón";
    }

}
?>
   
