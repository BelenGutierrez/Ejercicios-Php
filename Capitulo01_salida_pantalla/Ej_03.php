<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php
        echo "<table>";
        ?>
        <table>
            <tr><td>Dog</td><td>Perro</td></tr>
            <tr><td>Yellow</td><td>Amarillo</td></tr>
            <tr><td>Blue</td><td>Azul</td></tr>
            <tr><td>Storm</td><td>Tormenta</td></tr>
            <tr><td>Flat</td><td>Apartamento</td></tr>
            <tr><td>Meal</td><td>Comida</td></tr>
            <tr><td>Sugar</td><td>Azucar</td></tr>
            <tr><td>Past</td><td>Pasado</td></tr>
            <tr><td>Fire</td><td>Fuego</td></tr>
            <tr><td>Room</td><td>Cuarto</td></tr>
        </table>
        <?php
        echo "</table>";
        ?>
    </body>
</html>
