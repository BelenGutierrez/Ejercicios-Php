
<?php

include_once 'Ave.php';

class Canario extends Ave {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($nombre, $sexo, $raza);
    }
 
    public function __toString() {
    return parent::__toString()."<br>Nombre: $this->nombre  Sexo: $this->sexo  Raza: $this->raza";
  }
  
    public function pia() {
        return "Pío pío pío";
    }

    public function canta() {
        return "Piiiiiiiii piiiiiii piii piiiiiiiiiiiiiiiiiiii";
    }

    public function comeLombriz() {
        return "Soy de una raza refinada, no como eso";
    }

}
?>
   