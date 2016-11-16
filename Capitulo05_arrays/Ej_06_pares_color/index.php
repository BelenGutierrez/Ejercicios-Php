<!DOCTYPE html>
<!--
Ejercicio 6
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
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
                <h1>Pares de un color Impares de otro color</h1>
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
                if ($contadorNumIntro == 8) {
                    $numeroTexto = $numeroTexto . " " . $numIntro; // añade el último número leído
                    $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros espacios de la cadena

                    $numero = explode(" ", $numeroTexto);

                    echo "Los números introducidos son: <br>";
                    foreach ($numero as $n) {
                        echo $n, " ";
                    }



                    echo "<br><br>Los pares en rojo y los impares en verde: <br>";
                    foreach ($numero as $n) {
                        if ($n % 2 == 0) {
                            echo "<span style='color:red'>", $n, " </span>";
                        } else {
                            echo "<span style='color:green'>", $n, " </span>";
                        }
                    }
                }

                // Pide número y añade el actual a la cadena
                if (($contadorNumIntro < 8) || (!isset($numIntro))) {
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
