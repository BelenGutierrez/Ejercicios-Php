<!DOCTYPE html>
<!--
Ejercicio 10
Realiza un conversor de Mb a Kb.
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
                <h1>Conversor de Mb a Kb</h1>
            </div>

            <div id="content">
                <?php
                $mb = $_POST['mb'];

                echo  $mb , " Mb son: ", ($mb * 1240), " Kb", "<br>";
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
