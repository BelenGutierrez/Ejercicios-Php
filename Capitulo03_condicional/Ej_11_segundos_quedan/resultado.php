<!DOCTYPE html>
<!--
Ejercicio 11
Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche.
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
                <h1>Segundos que restan para medianoche</h1>
            </div>

            <div id="content">
                <?php
                $hora = $_POST['hora'];
                $min = $_POST['min'];
                $segundosIntro = (($hora * 60 * 60) + ($min * 60));
               
                echo "Para medianoche faltan ", 86400 - $segundosIntro , " segundos";
                ?>
                <br><br><br><br>
                <a href="index.html">Volver</a>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
