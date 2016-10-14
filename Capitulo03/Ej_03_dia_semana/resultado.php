<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana.
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
                <h1>Día de la Semana</h1>
            </div>

            <div id="content">
                <?php
                $numDia = $_GET['num'];

                switch ($numDia) {

                    case 1:
                        echo "El ", $numDia, " corresponde al: Lunes ";
                        break;

                    case 2:
                        echo "El ", $numDia, " corresponde al: Martes ";
                        break;

                    case 3:
                        echo "El ", $numDia, " corresponde al: Miércoles ";
                        break;

                    case 4:
                        echo "El ", $numDia, " corresponde al: Jueves ";
                        break;

                    case 5:
                        echo "El ", $numDia, " corresponde al: Viernes ";
                        break;

                    case 6:
                        echo "El ", $numDia, " corresponde al: Sábado ";
                        break;

                    case 7:
                        echo "El ", $numDia, " corresponde al: Domingo ";
                        break;


                    default:
                        echo "El día introducido no es correcto.";
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
