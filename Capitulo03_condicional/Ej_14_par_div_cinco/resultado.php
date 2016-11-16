<!DOCTYPE html>
<!--
Ejercicio 14
Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.
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
                <h1>Número par y/o divisible por 5</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                $numIntro = $_POST['n'];
               
                
                // ordenación de los dos primeros números
                if (($numIntro % 2) == 0)  {
                    
                echo "El " , $numIntro , " es par, ";
                    } else {
                        echo "El " , $numIntro , " es impar, ";
                }
                
                 if (($numIntro % 5) == 0) {
                    
                echo "y divisible por 5. ";
                    } else {
                        echo "y no es divisible por 5. ";
                }
               
                ?>
                <br><br><br><br>
                <a href="index.html">Volver</a>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
