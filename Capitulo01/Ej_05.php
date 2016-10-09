<!DOCTYPE html>
<!--
Escribe un programa que utilice las variables $x y $y . Asignales los valores 144 y 999 respectiva-
mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <?php
        $x = 144;
        $y = 999;

        echo '<p>El valor de  x  es: ' . $x . "</p>";
        echo '<p>El valor de  y  es: ' . $y . "</p>";
        echo '<p>La suma de x e y es: ' . ($x + $y) . "</p>";
        echo '<p>La resta de x e y es: ' . ($x - $y) . "</p>";
        echo '<p>La division de x e y es: ' . $x / $y . "</p>";
        echo '<p>La multiplicación de x e y es: ' . $x * $y . "</p>";
        ?>
    </body>
</html>
