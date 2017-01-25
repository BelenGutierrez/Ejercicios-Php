<?php

  require_once '../Model/Articulo.php';
  
  
  // Obtiene todos los artículos
  $data['articulos'] = Articulo::getArticulos();
 //var_dump($data['articulos']);
 
  
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);

  echo $twig->render('listado.html.twig', $data);
  
  


  
 