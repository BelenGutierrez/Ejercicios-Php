<!DOCTYPE html>
<!--
Ejercicio 1
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .
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
                <h3>Usando bucle for</h3>
            </div>

            <div id="content">
                <br><br>
                <?php
                
                for ($i = 1; $i <= 100; $i++) {
                    if (($i % 5) == 0) {
                        echo $i , " ";
                    }
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
