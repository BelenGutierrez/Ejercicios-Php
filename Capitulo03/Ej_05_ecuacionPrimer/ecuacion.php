<!DOCTYPE html>
<!--
Ejercicio 5
Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
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
                <h1>Ecuacion de primer grado</h1>
            </div>

            <div id="content">

                <?php
                $primeraIncognita = $_GET['a'];
                $segundaIncognita = $_GET['b'];

                if ($primeraIncognita == 0) {
                    echo "Si la primera incógnita es 0, no se puede dividir";
                } else if ($segundaIncognita == 0) {
                    echo "Si la segunda incognita es cero, el resultado será cero";
                } else {
                    echo "El valor de x es: ", (-$segundaIncognita / $primeraIncognita );
                }
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
