<!DOCTYPE html>
<!--
Ejercicio 8
Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
o sobresaliente).
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
                <h1>Boletín de notas</h1>
            </div>

            <div id="content">
                <?php
                $primera = $_GET['primera'];
                $segunda = $_GET['segunda'];
                $tercera = $_GET['tercera'];
                $media = ($primera + $segunda + $tercera) / 3;

                echo " La media de las 3 notas es: ", round($media, $precision = 2), "<br>";

                if ($media < 5) {
                    echo "<h3>Insuficiente, ponte las pilas!!</h3>";
                } else if (($media >= 5) && ( $media < 6)) {
                    echo "<h3>Suficiente, un esfuercito más.</h3>";
                } else if (($media >= 6) && ( $media < 7)) {
                    echo "<h3>Bien, no te duermas en los laureles.</h3>";
                } else if (($media >= 7) && ($media < 9)) {
                    echo "<h3>Notable, Grande máquina!!</h3>";
                } else if ($media >= 9) {
                    echo "<h3>Sobresaliente, tú no eres de éste planeta.</h3>";
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
