<!DOCTYPE html>
<!--
Ejercicio 9
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax 2 + bx + c = 0).
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
                <h1>Ecuacion de segundo grado</h1>
            </div>

            <div id="content">
                <?php
                $x1;
                $x2;

                // 0x^2 + 0x + 0 = 0

                if ((a == 0) && (b == 0) && (c == 0)) {
                    echo "La ecuación tiene infinitas soluciones.";
                }

                // 0x^2 + 0x + c = 0  con c distinto de 0

                if ((a == 0) && (b == 0) && (c != 0)) {
                    echo "La ecuación no tiene solución.";
                }

                // ax^2 + bx + 0 = 0  con a y b distintos de 0

                if ((a != 0) && (b != 0) && (c == 0)) {
                    echo "x1 = 0";
                    echo "x2 = " + (-b / a);
                }


                // 0x^2 + bx + c = 0  con b y c distintos de 0

                if ((a == 0) && (b != 0) && (c != 0)) {
                    echo "x1 = x2 = " + (-c / b);
                }

                // ax^2 + bx + c = 0  con a, b y c distintos de 0

                if ((a != 0) && (b != 0) && (c != 0)) {
                    // double discriminante = b * b - (4 * a * c);

                    if (discriminante < 0) {
                        echo "La ecuación no tiene soluciones reales";
                    } else {
                        echo "x1 = " + (-b + Math . sqrt(discriminante)) / (4 * a * c);
                        echo "x2 = " + (-b - Math . sqrt(discriminante)) / (4 * a * c);
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
