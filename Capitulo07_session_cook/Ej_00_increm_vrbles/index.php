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
                <h1>Incrementa, decrementa variables</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                session_start(); // Inicia la sesión
                // La primera vez que se carga la página, se inicializan
                // las variables de sesión a y b a cero.
                if (!isset($_SESSION['a'])) {
                    $_SESSION['a'] = 0;
                }
                if (!isset($_SESSION['b'])) {
                    $_SESSION['b'] = 0;
                }

                switch ($_POST['opcion']) {
                    case "incA" :
                        $_SESSION['a'] ++;
                        break;
                    case "decA" :
                        $_SESSION['a'] --;
                        break;
                    case "incB" :
                        $_SESSION['b'] ++;
                        break;
                    case "decB" :
                        $_SESSION['b'] --;
                        break;
                    case "cierra":
                        session_destroy();//mata la sessión
                        header("refresh: 0;"); // Vuelve a cero las variables refrescando la pag
                }
                echo " <h1>a = ", $_SESSION['a'], "</h1>";
                echo " <h1>b = ", $_SESSION['b'], "</h1>";
                ?>
                <form action="#" method="POST">
                    <select name="opcion">
                        <option value="incA">Incrementa a</option>
                        <option value="decA">Decrementa a</option>
                        <option value="incB">Incrementa b</option>
                        <option value="decB">Decrementa b</option>
                        <option value="cierra">Cierra sesión</option>
                    </select>
                    <input type="submit" value="OK">
                </form>
                <br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
