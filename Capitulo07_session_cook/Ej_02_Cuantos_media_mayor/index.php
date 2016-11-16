<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 2
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.
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
                <h1>Cuantos, media de impares y mayor de pares</h1>
                <h3>Para finalizar, introducir un número negativo</h3>
            </div>

            <div id="content">
                <br><br>

                <?php
                $n = $_POST['n'];
                //$_SESSION['cuentaImpares'] = 0;

                if ($n % 2 == 0) {// Los pares los guardo en un array 
                    $_SESSION['pares'][] = $n;  //y el [] sirve para concatenar
                } else {
                    $_SESSION['impares'] += $n;
                    $_SESSION['cuentaImpares'] ++;
                }
                if (!isset($n) || ($n >= 0)) {
                    $_SESSION['cuentaNumeros'] ++;
                    ?>
                    <form action="#" method="post">
                        <input type="number" name="n" autofocus required>
                        <input type="submit" value="Ok">
                    </form>   
                    <?php
                } else {
                    echo "El total de números introducidos es: ", $_SESSION['cuentaNumeros'] - 1;

                    echo "<br>La media de los impares es: ";
                    echo $_SESSION['impares'] / $_SESSION['cuentaImpares'];

                    echo "<br>El mayor de los pares es: ";
                    echo max($_SESSION['pares']);
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
