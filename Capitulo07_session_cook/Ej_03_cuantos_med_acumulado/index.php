<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.
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
                <h1>Cuantos, media y total acumulado</h1>
                <h3>Podrá introducir números mientras no supere 10000</h3>
            </div>

            <div id="content">
                <br>

                <?php
                $n = $_POST['n'];
                $_SESSION['acumulado'] += $n;

                if (!isset($n) || ($_SESSION['acumulado'] <= 10000)) {
                    $_SESSION['cuentaNumeros'] ++;
                    ?>
                    <form action="#" method="post">
                        <input type="number" name="n" autofocus required>
                        <input type="submit" value="Ok">
                    </form>   
                    <?php
                } else {
                    echo "<br>El total de números introducidos es: ", $_SESSION['cuentaNumeros'];

                    echo "<br>El total acumulado es: " .  $_SESSION['acumulado'];
                    
                    echo "<br>La media es: ";
                    echo $_SESSION['acumulado'] / $_SESSION['cuentaNumeros'];
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
