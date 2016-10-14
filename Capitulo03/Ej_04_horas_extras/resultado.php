<!DOCTYPE html>
<!--
Ejercicio 4
Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.
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
                <h1>Salario con Horas Extras</h1>
            </div>

            <div id="content">
                <?php
                $hora = $_POST['hora'];

                if (($hora > 0) && ($hora <= 40) ){
                    $sinExtras = $hora * 12;
                echo " El salario semanal es: " , $hora * 12 , " euros", "<br>";
                
                } else {
                   echo " El salario semanal es: ", (($hora - 40) * 16) +  (40 * 12), " euros", "<br>"; 
                    
                }
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
