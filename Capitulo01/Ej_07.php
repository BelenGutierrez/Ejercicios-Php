<!DOCTYPE html>
<!--
Crea las variables $nombre , $direccion y $telefono y asígnales los valores adecuados. Muestra los
valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php
        $nombre = "Belen Gutierrez";
        $direccion = "No se la digo a nadie";
        $telefono = "Menos";
        
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Dirección: " . $direccion . "</p>";
        echo "<p>Teléfono: " . $telefono . "</p>";
        ?>
    </body>
</html>
