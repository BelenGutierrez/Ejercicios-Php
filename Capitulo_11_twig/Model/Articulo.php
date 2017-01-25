<?php

require_once 'BlogDB.php';

class Articulo {
  private $id;
  private $titulo;
  private $imagen;
  private $contenido;
  private $fecha_publicacion;
  
  function __construct($id, $titulo, $imagen, $contenido, $fecha_publicacion) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->imagen = $imagen;
    $this->contenido = $contenido;
    $this->fecha_publicacion = $fecha_publicacion;
  }

  public function getId() {
    return $this->id;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function getImagen() {
    return $this->imagen;
  }

  public function getContenido() {
    return $this->contenido;
  }  
  
  public function getFecha_publicacion() {
    return $this->fecha_publicacion;
  }  
  public function insert() {
    $conexion = BlogDB::connectDB();
    $insercion = "INSERT INTO articulo (titulo, imagen, contenido) VALUES (\"".$this->titulo."\", \"".$this->imagen."\", \"".$this->contenido."\")";
    $conexion->exec($insercion);
  }

  public function delete() {
    $conexion = BlogDB::connectDB();
    $borrado = "DELETE FROM articulo WHERE id=\"".$this->id."\"";
    $conexion->exec($borrado);
  }
  
  public function update() {
    $conexion = BlogDB::connectDB();
    $modifica = "UPDATE articulo SET titulo=\"".$this->titulo."\", imagen=\"".$this->imagen."\", contenido=\"".$this->contenido."\"WHERE id=\"".$this->id."\"";
    $conexion->exec($modifica);
  }
  
  public static function getArticulos() {
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, imagen, contenido, fecha_publicacion FROM articulo";
    $consulta = $conexion->query($seleccion);

    $articulos = [];
    
    while ($registro = $consulta->fetchObject()) {
      $articulos[] = new Articulo($registro->id, $registro->titulo, $registro->imagen, $registro->contenido, $registro->fecha_publicacion);
    }
   
    return $articulos;    
  }
  
  public static function getArticuloById($id) {
    $conexion = BlogDB::connectDB();
    $seleccion = "SELECT id, titulo, imagen, contenido, fecha_publicacion FROM articulo WHERE id=\"".$id."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $articulo = new Articulo($registro->id, $registro->titulo, $registro->imagen, $registro->contenido, $registro->fecha_publicacion);
       
    return $articulo;    
  }
}
