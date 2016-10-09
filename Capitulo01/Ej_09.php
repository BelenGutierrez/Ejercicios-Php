<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <h2>CONVERSOR PESETAS A EUROS</h2>
            <?php
            $e = 166.386;
            $p = 100;
            $resultado = $p / $e;

            echo "<p> $p  pesetas son:  $resultado  euros.</p>";
            ?>
    </body>
</html>
