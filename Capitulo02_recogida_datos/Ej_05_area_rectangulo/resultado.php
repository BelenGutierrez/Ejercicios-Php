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
                <h1>Area del Rectángulo</h1>
            </div>

            <div id="content">
                <?php
                $base = $_POST['base'];
                $altura = $_POST['altura'];

                echo " El área del rectángulo es: " , $base * $altura, " cm<sup>2</sup>" , "<br>";
               
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
