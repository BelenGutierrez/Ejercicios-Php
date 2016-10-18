<!DOCTYPE html>
<!--
Ejercicio 2
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle while .
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
                <h1>Multiplos de 5 entre 0 y 100</h1>
                <h3>Usando bucle while</h3>
            </div>

            <div id="content">
                <br><br>
                <?php
                $i = 1;
                while ($i <= 100) {
                    if (($i % 5) == 0) {
                        echo $i, " ";
                    }
                    $i++;
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
