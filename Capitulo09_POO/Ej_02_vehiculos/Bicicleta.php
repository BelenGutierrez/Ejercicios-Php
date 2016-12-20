<?php

include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo {

  private $cantidadDeRayos;

  public function __construct($cr) {
    parent::__construct();
    $this->cantidadDeRayos = $cr;
  }
  
  public function sinAgarrar() {
    return "Eyyy Mira como ando sin las manos!!!!!";
  }
}
