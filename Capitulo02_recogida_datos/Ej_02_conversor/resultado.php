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
                <h1>Conversor pesetas a euros</h1>
            </div>

            <div id="content">
                <?php
                $euro = 166.386;
                echo $_POST['euro'], " euros, son:  ", $_POST['euro'] *$euro, " pesetas";
                ?>
                <br><br><br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
