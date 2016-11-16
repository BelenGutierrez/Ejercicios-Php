<!DOCTYPE html>
<!--
Ejercicio 17
Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado.
Se permiten números de hasta 5 cifras.
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
                <h1>Primera cifra del número introducido</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];

                if ($numIntro <= 9) {
                    echo "La primera cifra de ", $numIntro, " es: ", $numIntro;
                }

                if (( $numIntro > 9) && ( $numIntro < 100)) {
                    $cifra = ($numIntro / 10);
                    echo "La primera cifra de ", $numIntro, " es: ", floor($cifra);
                }

                if (( $numIntro > 99) && ( $numIntro < 1000)) {
                    $cifra = ($numIntro / 100);
                    echo "La primera cifra de ", $numIntro, " es: ", floor($cifra);
                }

                if (( $numIntro > 999) && ( $numIntro < 10000)) {
                    $cifra = ($numIntro / 1000);
                    echo "La primera cifra de ", $numIntro, " es: ", floor($cifra);
                }
                
                if (( $numIntro > 9999) && ( $numIntro < 100000)) {
                    $cifra = ($numIntro / 10000);
                    echo "La primera cifra de ", $numIntro, " es: ", floor($cifra);
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
