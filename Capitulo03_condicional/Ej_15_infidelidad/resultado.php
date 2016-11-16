<!DOCTYPE html>
<!--
Ejercicio 15
Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo
infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes
utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas
contestadas con falso no suman puntos. Utiliza el fichero test_infidelidad.txt2 para obtener las
preguntas y las conclusiones del programa.
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
                <h1>Cuestionario infidelidad</h1>
            </div>

            <div id="content">
                <?php
                for ($i = 1; $i <= 10; $i++) {

                    $respuesta = $_REQUEST["r$i"];

                    $puntajeTotal = $puntajeTotal + $respuesta;
                }

                if ($puntajeTotal <= 10) {
                    echo "<h3>Tu puntaje total es: ", $puntajeTotal, " puntos</h3><br>";
                    echo "<h3>¡Enhorabuena! tu pareja parece ser totalmente fiel.</h3>";
                    
                } else if (($puntajeTotal > 10) && ($puntajeTotal <= 22)) {
                    echo "<h3>Tu puntaje total es: ", $puntajeTotal, " puntos</h3><br>";
                    echo "<h3>Quizás exista el peligro de otra persona en su vida o en su mente, "
                    . "aunque seguramente será algo sin importancia. No bajes la guardia.</h3>";
                    
                } else if (($puntajeTotal > 22) && ($puntajeTotal <= 30)) {
                    echo "<h3>Tu puntaje total es: ", $puntajeTotal, " puntos</h3><br>";
                    echo "<h3>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. "
                    . "Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.</h3>";
                }
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
