<?php
  require_once '../Model/Articulo.php';

  // sube la imagen al servidor
  move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/img/" . $_FILES["imagen"]["name"]);

  // inserta el artículo en la base de datos
  $articuloNew = new Articulo("", $_POST['titulo'], $_FILES["imagen"]["name"], $_POST['contenido']);
  $articuloNew->insert();
  header("Location: index.php");
  
 

 
  