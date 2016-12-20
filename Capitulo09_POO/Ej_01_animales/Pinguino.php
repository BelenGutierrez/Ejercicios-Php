
<?php

include_once 'Ave.php';

class Pinguino extends Ave {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($n, $s, $r);
    }

    public function __toString() {
        return parent::__toString() . "<br>Nombre: $this->nombre  Sexo: $this->sexo  Raza: $this->raza";
    }

    public function vuela() {
        return "No puedo volar";
    }

    public function corre() {
        return "No puedo correr";
    }

    public function nada() {
        return "Menos mal que puedo nadar";
    }

}

?>
    