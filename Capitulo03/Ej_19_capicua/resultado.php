<!DOCTYPE html>
<!--
Ejercicio 19
Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se
permiten números de hasta 5 cifras.
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
                <h1>Número capicúa</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];


                if (abs($numIntro) <= 9) {
                    echo "El ", $numIntro, " es capicúa.";
                }

                if (( abs($numIntro) > 9) && ( abs($numIntro) < 100)) {
                    $cifra = $numIntro % 10;
                    if ((floor(abs($numIntro / 10))) == $cifra) {
                        echo "El ", $numIntro, " es capicúa.";
                    } else {
                        echo "El ", $numIntro, " no es capicúa.";
                    }
                }

                if (( abs($numIntro) > 99) && ( abs($numIntro) < 1000)) {
                    $cifra = $numIntro % 10;
                    if ((floor(abs($numIntro / 100))) == $cifra) {
                        echo "El ", $numIntro, " es capicúa.";
                    } else {
                        echo "El ", $numIntro, " no es capicúa.";
                    }
                }

                if (( abs($numIntro) > 999) && ( abs($numIntro) < 10000)) {
                    $cifra = $numIntro % 100;
                    if ((floor( abs($numIntro) / 1000 ) == (abs($numIntro) % 10) ) && ( (floor( abs($numIntro) / 100 ) % 10 )== (floor( abs($numIntro) / 10) % 10 ))){
                        echo "El ", $numIntro, " es capicúa.";
                    } else {
                        echo "El ", $numIntro, " no es capicúa.";
                    }
                }

                if (( abs($numIntro) > 9999) && ( abs($numIntro) < 100000)) {
                    $cifra = $numIntro % 1000;
                     if ((floor( abs($numIntro) / 10000 ) == (abs($numIntro) % 10) ) && ( (floor( abs($numIntro) / 1000 ) % 10 )== (floor( abs($numIntro) / 10) % 10 ))){
                        echo "El ", $numIntro, " es capicúa.";
                    } else {
                        echo "El ", $numIntro, " no es capicúa.";
                    }
                }
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
