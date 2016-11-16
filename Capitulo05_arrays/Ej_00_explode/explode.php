<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
                <h1>Recoge varios números en un array</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $n = $_GET['n'];
                $contadorNumeros = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
                if (!isset($n)) {
                    $contadorNumeros = 0;
                    $numeroTexto = "";
                }
                // Termina el bucle y pinta resultado
                if ($contadorNumeros == 6) {
                    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
                    $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros espacios de la cadena
                    $numero = explode(" ", $numeroTexto);
                    echo "Los números introducidos son: ";
                    foreach ($numero as $n) {
                        echo $n, " ";
                    }
                }
                // Bucle. Pide número y almacena al final del array
                if (($contadorNumeros < 6) || (!isset($n))) {
                    ?>
                    <form action="#" method="get">
                        Introduzca un número:
                        <input type="number" name ="n" autofocus>
                        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
                        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
                        <input type="submit" value="OK">
                    </form>
                    <?php
                }
                ?>
                <br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
