<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 1
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
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
                <h1>Media de números introducidos</h1>
                <h3>Para finalizar, introducir un número negativo</h3>
            </div>

            <div id="content">
                <br><br>

                <?php
                $n = $_POST['n'];

                if (!isset($n) || ($n >= 0)) {
                    $_SESSION['total'] += $n;
                    $_SESSION['cuentaNumeros'] ++;
                    ?>
                    <form action="#" method="post">
                        <input type="number" name="n" autofocus required>
                        <input type="submit" value="Ok">
                    </form>   
                    <?php
                } else {

                    echo "<br>La media es: ";

                    echo $_SESSION['total'] / ($_SESSION['cuentaNumeros'] - 1 );
                    ?>
                    <br><br>
                    <?php
                    session_destroy();
                }
                ?>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
