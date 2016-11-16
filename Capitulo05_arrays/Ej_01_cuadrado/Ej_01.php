<!DOCTYPE html>
<!--
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
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
                <h1>Cuadrado y Cubo</h1>
            </div>

            <div id="content">

                <?php
                for ($i = 0; $i < 20; $i++) {
                    $numero[] = rand(0, 100);
                }

                foreach ($numero as $n) {
                    $cuadrado[] = $n * $n;
                    $cubo[] = $n * $n * $n;
                }
                ?>
                <table>
                    <tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>
                    <?php
                    for ($i = 0; $i < 20; $i++) {

                        echo "<tr><td>" . $numero[$i] . "</td>";
                        echo "<td>" . $cuadrado[$i] . "</td>";
                        echo "<td>" . $cubo[$i] . "</td></tr>";
                    }
                    ?>
                </table>     
            </div>
            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
