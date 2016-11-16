<!DOCTYPE html>
<!--
Ejercicio 4
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for .
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
                <h1>Números del 320 al 160 (de 20 en 20)</h1>
                <h3>Usando bucle for</h3>
            </div>

            <div id="content">
                <br><br>
                <?php
                for ($i = 320; $i >= 160; $i -= 20) {

                    echo $i, " ";
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
