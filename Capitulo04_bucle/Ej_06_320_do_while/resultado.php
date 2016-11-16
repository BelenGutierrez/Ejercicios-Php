<!DOCTYPE html>
<!--
Ejercicio 6
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while .
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
                <h3>Usando bucle do while</h3>
            </div>

            <div id="content">
                <br><br>
                <?php
                $i = 320;

                do {
                    echo $i, " ";
                    $i -= 20;
                } while ($i >= 160)
                ?>
                <br><br><br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
