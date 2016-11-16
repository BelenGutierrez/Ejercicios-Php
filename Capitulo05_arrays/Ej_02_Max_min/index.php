<!DOCTYPE html>
<!--
Ejercicio 2
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Máximo y mínimo en un array</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_GET['n'];
                $contadorNumIntro = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
                //$maximo = -PHP_INT_MAX;
                //$minimo = PHP_INT_MAX;

                if (!isset($numIntro)) {
                    $contadorNumIntro = 0;
                    $numeroTexto = "";
                }

                // Muestra los números introducidos
                if ($contadorNumIntro == 10) {
                    $numeroTexto = $numeroTexto . " " . $numIntro; // añade el último número leído
                    $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros espacios de la cadena

                    $numero = explode(" ", $numeroTexto);
                    $maximo = max($numero);
                    $minimo = min($numero);

                    echo "Los números introducidos son: <br>";
                    foreach ($numero as $n) {
                        if ($n < $minimo) {
                            $minimo = $n;
                        } else if ($n > $maximo) {
                            $maximo = $n;
                        }
                    }
                }
                foreach ($numero as $n) {
                    if ($n == $minimo) {
                        echo "$n mínimo<br>";
                    } else if ($n == $maximo) {
                        echo "$n máximo<br>";
                    } else {
                        echo "$n<br>";
                    }
                }
// Pide número y añade el actual a la cadena
                if (($contadorNumIntro < 10) || (!isset($numIntro))) {
                    ?>
                    <form action="#" method="get">
                        Introduzca un número:
                        <input type="number" name ="n" autofocus>
                        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumIntro ?>">
                        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numIntro ?>">
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
