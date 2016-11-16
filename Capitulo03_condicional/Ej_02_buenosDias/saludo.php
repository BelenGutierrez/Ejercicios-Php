<!DOCTYPE html>
<!--
Ejercicio 2
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title>saludo</title>
    </head>

    <body>
        <div id="container">
            <div id="header">
                <h1>Asignatura</h1>
            </div>

            <div id="content">
                <?php
                $miHora = $_GET['hora'];

                if (($miHora >= 6) && ($miHora <= 12)) {
                    echo "Buenos días";
                }
                if (($miHora >= 13) && ($miHora <= 20)) {
                    echo "Buenos tardes";
                }
                if (($miHora >= 21) && ($miHora <= 24) || ($miHora <= 5)) {
                    echo "Buenos noches";
                }
                if ($miHora > 24) {
                    echo "Hora no válida.";
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
