<!DOCTYPE html>
<!--
Ejercicio 8
Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla ( <table> en HTML).
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
                <h1>Tabla de multiplicar</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];
                echo "La tabla del ", $numIntro, " es: <br><br>"; 
                echo "<table>";
                for( $i = 0; $i <= 10; $i++) {
                    
                  echo "<tr><td>", $numIntro , "</td><td>x</td><td>" , $i , "</td><td> =</td><td>" , $numIntro * $i , "</td></tr>"; 
                }

                ?>
                </table>
                <br><br>
                <a href="index.html">Volver</a>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
