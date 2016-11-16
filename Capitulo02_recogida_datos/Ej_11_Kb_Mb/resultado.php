<!DOCTYPE html>
<!--
Ejercicio 11
Realiza un conversor de Kb a Mb.
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
                <h1>Conversor de Kb a Mb</h1>
            </div>

            <div id="content">
                <?php
                $kb = $_POST['kb'];

                echo $kb, " Kb son: ", round($kb / 1024, $precision = 2), " Mb", "<br>";
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
