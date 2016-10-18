<!DOCTYPE html>
<!--
Ejercicio 3
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
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
                <h1>Rota array</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_GET['n'];
                $contadorNumIntro = $_GET['contadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];

                if (!isset($numIntro)) {
                    $contadorNumIntro = 0;
                    $numeroTexto = "";
                }

                // Muestra los números introducidos
                if ($contadorNumIntro == 15) {
                    $numeroTexto = $numeroTexto . " " . $numIntro; // añade el último número leído
                    $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros espacios de la cadena

                    $numero = explode(" ", $numeroTexto);

                    echo "El array original es: <br>";
                    foreach ($numero as $n) {
                        echo $n, " ";
                    }

                    $aux = $numero[14];
                    for ($i = 14; $i >= 0; $i--) {
                        $numero[$i] = $numero[$i - 1];
                    }
                    $numero[0] = $aux;

                    echo "<br>El array rotado es: <br>";
                    foreach ($numero as $n) {
                        echo $n, " ";
                    }
                }

                // Pide número y añade el actual a la cadena
                if (($contadorNumIntro < 15) || (!isset($numIntro))) {
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
