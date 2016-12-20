<?php

abstract class Animal {

    private $nombre;
    private $sexo;
    private $raza;

   // public function __construct($s = "macho") {
    //    $this->sexo = $s;
    //}

    public function __construct($nombre, $sexo, $raza) {
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->raza = $raza;
    }

    public function __toString() {
        return "Nombre:  $this->nombre";
        return "Sexo: $this->sexo";
        return "Raza: $this->raza";
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function anda() {
        return "Estoy andando según mi especie";
    }

    public function muerde() {
        return "añññññññññ añññññññññ";
    }

    public function come() {
        return"am am am";
    }

    public function bebe() {
        return "glup glup";
    }

}
