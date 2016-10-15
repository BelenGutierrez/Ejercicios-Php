<!DOCTYPE html>
<!--
Ejercicio 18
Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
negativo. Se permiten números de hasta 5 dígitos.
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
                <h1>Cuántos digitos tiene un número entero</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];
                $cifra = 1;

                if (abs($numIntro) <= 9) {
                    
                }

                if (( abs($numIntro) > 9) && ( abs($numIntro) < 100)) {
                    $cifra = $cifra * 2;
                }

                if (( abs($numIntro) > 99) && ( abs($numIntro) < 1000)) {
                    $cifra = $cifra * 3;
                }

                if (( abs($numIntro) > 999) && ( abs($numIntro) < 10000)) {
                    $cifra = $cifra * 4;
                }

                if (( abs($numIntro) > 9999) && ( abs($numIntro) < 100000)) {
                    $cifra = $cifra * 5;
                }
                echo "Las cifras de ", $numIntro, " son: ", $cifra;
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
