<?php
session_start();

include_once 'DadoPoker.php';


if (!isset($_SESSION[jugada])) {
    $_SESSION[jugada] = serialize(array(new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker()));
}

if (!isset($_SESSION[tiradasTotales])) {
    $_SESSION[tiradasTotales] = 0;
}


$jugada = unserialize($_SESSION[jugada]);
DadoPoker::setTiradasTotales($_SESSION[tiradasTotales]);
?>
<!DOCTYPE html>
<!--
Ejercicio 3
Crea la clase DadoPoker . Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J,
7 y 8 . Crea el método tira() que no hace otra cosa que tirar el dado, es decir, genera un valor
aleatorio para el objeto al que se le aplica el método. Crea también el método nombreFigura() , que
diga cuál es la figura que ha salido en la última tirada del dado en cuestión. Crea, por último, el
método getTiradasTotales() que debe mostrar el número total de tiradas entre todos los dados.
Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title>Dados de Poker</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1>Dados de pócker</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                echo "Dados: ";

                foreach ($jugada as $dado) {
                    $dado->tira();
                    echo ($dado->nombreFigura()) . " ";
                }

                echo "<br>Tiradas totales: " . (DadoPoker::getTiradasTotales());
                echo "<br>Tiradas de cubilete: " . (DadoPoker::getTiradasTotales() / 5);

                // Actualiza la sesión 
                $_SESSION[jugada] = serialize($jugada);
                $_SESSION[tiradasTotales] = DadoPoker::getTiradasTotales();
                ?>
                <br><br>
                <br><br>Pulsa <b>F5</b> para seguir tirando el dado.
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
        
    </body>
</html>
