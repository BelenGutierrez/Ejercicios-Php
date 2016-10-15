<!DOCTYPE html>
<!--
Ejercicio 12
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
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
                <h1>Cuestionario</h1>
            </div>

            <div id="content">
                <?php
                for ($i = 1; $i <= 10; $i++) {

                    $respuesta = $_REQUEST["r$i"];

                    $puntajeTotal = $puntajeTotal + $respuesta;
                }
                echo "<h3>Tu puntaje total es: </h3>", $puntajeTotal, " puntos<br>";
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
