<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
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
                <h1>Volumen del cono</h1>
            </div>

            <div id="content">
                <?php
                $radio = $_POST['r'];
                $altura = $_POST['h'];
                
                $v = (1 / 3) * Math.pi() * $_POST['r'] * $_POST['r'] * $_POST['h'];
                 echo " El volumen es: ", round($v, $precision = 2), " cm<sup>2</sup>.";
               
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
