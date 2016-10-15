<!DOCTYPE html>
<!--
Ejercicio 13
Escribe un programa que ordene tres números enteros introducidos por teclado.
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
                <h1>Ordena números enteros</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];
                $aux;
                // ordenación de los dos primeros números
                if ($n1 > $n2) {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                }

                // ordenación de los dos últimos números
                if ($n2 > $n3) {
                    $aux = $n2;
                    $n2 = $n3;
                    $n3 = $aux;
                }

                // se vuelven a ordenar los dos primeros
                if ($n1 > $n2) {
                    $aux = $n1;
                    $n1 = $n2;
                    $n2 = $aux;
                }
                
                echo "Los números introducidos ordenados de menor a mayor son $n1, $n2 y $n3.";
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
