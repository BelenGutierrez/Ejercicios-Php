<!DOCTYPE html>
<!--
Ejercicio 16
Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.
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
                <h1>Ultima cifra del número introducido</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];


                $cifra = $numIntro % 10;


                echo "La última cifra de ", $numIntro, " es: ", $cifra;
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
