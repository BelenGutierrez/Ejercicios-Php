<?php

include_once 'Vehiculo.php';

class Coche extends Vehiculo {

  private $matriculacion;

  public function __construct($m) {
    parent::__construct();
    $this->matriculacion = $m;
  }
  
  public function aparca() {
    return "Mira como se aparca sin rozar a los demás coches";
  }
}
