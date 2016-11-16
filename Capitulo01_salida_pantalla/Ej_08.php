<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <h2>CONVERSOR EUROS A PESETAS</h2>
        <?php
        $p = 166.386;
        $e = 100;
        $resultado = $e * $p ;

        echo "<p>$e  euros son:  $resultado  pesetas.</p>";
        ?>
    </body>
</html>
