<!DOCTYPE html>
<!--
Ejercicio 6
Realiza un programa
√ que calcule el tiempo que tardará en caer un objeto desde una altura h . Aplica
la fórmula t = 2h/g
siendo g = 9.81m/s 2
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
                <h1>Tiempo de caída de un objeto</h1>
            </div>

            <div id="content">
                <?php
                $altura = $_GET['h'];
                $g = 9.81;
                $tiempo = sqrt(2 * $altura / $g);

                echo " El tiempo de caída es: ", round($tiempo, $precision = 2) , " segundos", "<br>";
                ?>
                <br><br><br><br>
            </div>
 
            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
