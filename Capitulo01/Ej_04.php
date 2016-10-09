<!DOCTYPE html>
<!--
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
        <h2>
        <?php
        echo "HORARIO DAW";
        ?>
        </h2>
        <table>
            <tr>
                <th>LUNES</th><th>MARTES</th><th>MIERCOLES</th><th>JUEVES</th><th>VIERNES</th>
            </tr>
            
            <tr>
                <td>EMPRESA</td><td>INT</td><td>CLIENTE</td><td>SERVIDOR</td><td>SERVIDOR</td>
            </tr>
            
            <tr>
                <td>EMPRESA</td><td>INT</td><td>CLIENTE</td><td>SERVIDOR</td><td>SERVIDOR</td>
            </tr>
            
            <tr>
                <td>EMPRESA</td><td>INT</td><td>CLIENTE</td><td>SERVIDOR</td><td>SERVIDOR</td>
            </tr>
            
            <tr>
                <td colspan="5" style="text-align: center">RECREO</td>
            </tr>
            
            <tr>
               <td>H.L.</td><td>SERVIDOR</td><td>INT</td><td>DESPLIEGUE</td><td>CLIENTE</td> 
            </tr>
            
            <tr>
                <td>H.L.</td><td>SERVIDOR</td><td>INT</td><td>DESPLIEGUE</td><td>CLIENTE</td>
            </tr>
            
            <tr>
                <td>H.L.</td><td>EMPRESA</td><td>INT</td><td>DESPLIEGUE</td><td>CLIENTE</td>
            </tr>
            
        </table>
       
    </body>
</html>
