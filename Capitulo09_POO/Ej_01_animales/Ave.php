<?php
include_once 'Animal.php';

abstract class Ave extends Animal {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($n, $s, $r);
    }

    public function __toString() {
        return "Nombre:  $this->nombre";
        return "Sexo: $this->sexo";
        return "Raza: $this->raza";
    }

    public function vuela() {
        return "Mira que bonito vuelo";
    }

    public function extiendeAlas() {
        return "Este es mi ejercicio favorito";
    }

    public function ponHuevos($s) {
        if ($this->getSexo() . equals("macho")) {
            return "Los machos no ponemos huevos";
        } else {
            return "Ahí va la tercera camada de hijitos";
        }
    }

}
?>
</body>
</html>
