<!DOCTYPE html>
<!--
Ejercicio 7
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <title>index</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Caja fuerte</h1>
            </div>

            <div id="content">
                <?php
                $numIntro = $_POST['n'];
                $contadorOportunidades = $_POST['contadorOportunidades'];
                $pass = 4895;


                if (!isset($numIntro)) {
                    $contadorOportunidades = 4;
                }

                if (isset($numIntro)) {
                    if ($numIntro == $pass) {
                        echo "La caja fuerte se ha abierto satisfactoriamente!!!! ";
                        $contadorOportunidades = 0;
                    } else {
                        echo "Lo siento, esa no es la contraseña correcta.<br>";
                        echo "Le quedan ", $contadorOportunidades, " oportunidades";
                        //$contadorOportunidades--;
                    }
                }
                if (($contadorOportunidades > 0) || (!isset($numIntro))) {
                    ?>
                    <br>
                    <div>Introduzca la contraseña para abrir la caja fuerte.</div>
                    <br><br>
                    <form action="#" method="post">
                        Contraseña (4 dígitos)<input type="number" name="n" min="0" max="9999" required autofocus><br>
                        <input type="hidden" name="contadorOportunidades" value="<?= $contadorOportunidades = $contadorOportunidades -1; ?>">
                        <br><br>
                        <input type="submit" value="Ok">
                    </form>
                    <?php
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
