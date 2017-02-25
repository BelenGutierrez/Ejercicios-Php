<?php $ciudad = $_GET["ciudades"]; ?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title>The weather</title>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <h1>The weather</h1>
            </div>

            <div id="content">
                <h2>The weather in:  <?= $ciudad ?></h2>
                <?php
                $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$ciudad,Spain&units=metric&appid=30d44ae7a7e20fd8aeecb88ab89da864");
                echo "<h3> JSON Data: </h3>$datos<hr>";
                $tiempo = json_decode($datos);
                echo "<h3>Data in an object: </h3>";
                print_r($tiempo);
                echo "<hr>";
                echo "<h3>Data: </h3>";
                echo "Temperature: " . $tiempo->{"main"}->{"temp"} . "ºC<br>";
                echo "Humidity: " . $tiempo->{"main"}->{"humidity"} . "%<br>";
                echo "Pressure: " . $tiempo->{"main"}->{"pressure"} . "mb<br>";
                echo "Wind speed: " . $tiempo->{"wind"}->{"speed"} . "km/h<br>";
                echo "Heaven: " . $tiempo->{"weather"}[0]->{"description"};
                ?>       
                <br><br><a href="index.html">Back</a>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>

    </body>
</html>
