<?php
session_start();

include_once 'Zona.php';

if (!isset($_SESSION[zonas])) {
    $_SESSION[zonas] = serialize(array(new Zona("Sala principal", 1000),
        new Zona("Sala de compra-venta", 200),
        new Zona("Sala VIP", 25)));
}

$zonas = unserialize($_SESSION[zonas]);
?>

<!DOCTYPE html>
<!--
Ejercicio 4
Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title>Expocoches Campanillas</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Dados de pócker</h1>
            </div>

            <div id="content">
                <br><br>
                
                <?php
                $zonaSeleccionada = $_POST['zonaSeleccionada'];
                $numeroDeEntradas = $_POST['numeroDeEntradas'];

                if (isset($zonaSeleccionada)) {
                    if ($zonas[$zonaSeleccionada]->vende($numeroDeEntradas)) {
                        echo '<script type="text/javascript">alert("' . $numeroDeEntradas . ' entradas vendidas en ' . $zonas[$zonaSeleccionada]->getDescripcion() . '");</script>';
                    } else {
                        echo '<script type="text/javascript">alert("Lo siento, no se ha podido realizar la venta.");</script>';
                    }
                }

                // Muestra toda la información de las zonas
                foreach ($zonas as $z) {
                    echo $z;
                }

                // Guarda toda la información de las zonas en la sesión
                $_SESSION[zonas] = serialize($zonas);
                ?>

                <!-- Formulario de venta -->
                <h2>Venta de entradas</h2>
                <form action="index.php" method="POST">
                    Nº de entradas:
                    <input type="number" name="numeroDeEntradas" min="1" autofocus="" size="4">;
                    <select name="zonaSeleccionada">
                        <?php
                        $i = 0;
                        foreach ($zonas as $z) {
                            echo '<option value="' . $i . '">' . $z->getDescripcion() . '</option>';
                            $i++;
                        }
                        ?>
                    </select>
                    <input type="submit" value="Vender">
                </form>
               
                <br><br>Pulsa <b>F5</b> para seguir tirando el dado.
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
