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
                <h1>Operaciones Matemáticas</h1>
            </div>

            <div id="content">
                <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                echo $num1, " + ", $num2, " = ", $num1 + $num2, "<br>";
                echo $num1, " - ", $num2, " = ", $num1 - $num2, "<br>";
                echo $num1, " * ", $num2, " = ", $num1 * $num2, "<br>";
                echo $num1, " / ", $num2, " = ", round($num1 / $num2, $precision = 2);
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
