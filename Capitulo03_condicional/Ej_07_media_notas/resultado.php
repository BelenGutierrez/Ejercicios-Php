<!DOCTYPE html>
<!--
Ejercicio 7
Realiza un programa que calcule la media de tres notas.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Media de 3 notas</h1>
            </div>

            <div id="content">
                <?php
                $primera = $_GET['primera'];
                $segunda = $_GET['segunda'];
                $tercera = $_GET['tercera'];
                $media = ($primera + $segunda + $tercera) / 3;
                
                echo " La media de las 3 notas es: ", round($media, $precision = 2), "<br>";
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
