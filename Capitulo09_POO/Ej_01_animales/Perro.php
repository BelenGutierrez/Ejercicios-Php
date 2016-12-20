
<?php

include_once 'Mamifero.php';

class Perro extends Mamifero {

    public function __construct($nombre, $sexo, $raza) {
        parent::__construct($nombre, $sexo, $raza);
    }
    public function __toString() {
    return parent::__toString()."<br>Nombre: $this->nombre  Sexo: $this->sexo  Raza: $this->raza";
  }

    public function ladra() {
        return "Guau guau";
    }

    public function vigilaLaCasa() {
        return "Aquí no entrarán ladrones";
    }

    public function escondeHueso() {
        return "Estoy cavando un pocito";
    }

}
?>
   
