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
                <h1>Actriz y actor favoritos</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                // Si se envían datos desde el formulario de actores,
                // se actualizan las cookies
                if (isset($_POST["actriz"])) {
                    $actriz = $_POST["actriz"];
                    $actor = $_POST["actor"];
                    setcookie("actriz", $actriz, time() + 3 * 24 * 3600);
                    setcookie("actor", $actor, time() + 3 * 24 * 3600);
                } else if (isset($_COOKIE["actriz"])) { // sino recupero de las cookies
                    $actriz = $_COOKIE["actriz"];
                    $actor = $_COOKIE["actor"];
                }
                // Borrado de cookies y variables
                if (isset($_POST["borraCookies"])) { // si se envía desde el fmlr de cookies, borramos
                    setcookie("actriz", NULL, -1);
                    setcookie("actor", NULL, -1);
                    unset($actriz);
                    unset($actor);
                }

                if (!isset($actriz)) {
                    echo "No has elegido todavía a tus actores favoritos.<br>";
                    echo "Utiliza el siguiente formulario para hacerlo.<br>";
                } else {
                    echo "<h2>Actriz favorita: " . $actriz . "</h2>";
                    echo "<h2>Actor favorito: " . $actor . "</h2>";
                    echo "Introduce nuevos nombres si quieres cambiar tus preferencias.<br>";
                }
                ?>
                <form action="#" method="post">
                    Actriz: <input type="text" name ="actriz"><br>
                    Actor: <input type="text" name ="actor"><br>
                    <input type="submit" value="Ok">
                </form>
                <hr>
                <form action="#" method="post">
                    <input type="hidden" name="borraCookies" value="si">
                    <input type="submit" value="Borrar cookies">
                </form>
                <br><br>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
