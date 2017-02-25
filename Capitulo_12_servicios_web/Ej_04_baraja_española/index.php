<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title>Baraja española</title>
    </head>
    <body>
        <div id="container">

            <div id="header">
                <h1>Baraja española</h1>
            </div>

            <div id="content">
                <?php
                $palos = ['Oro', 'Basto', 'Espada', 'Copa'];
                $figuras = ['As', '2', '3', '4', '5', '6', '7', '8', '9', 'Sota', 'Caballo', 'Rey'];
                
                $numCartas = $_GET['cantidad'];
                $baraja = [];
                
                if (($numCartas <= 40) && ($numCartas > 0)) {
                    while ($numCartas > 0) {
                        $paloElegido = $palos[rand(0, 3)];
                        $figuraElegida = $figuras[rand(0, 11)];
                        $carta = [
                            'figura' => $figuraElegida,
                            'palo' => $paloElegido
                        ];
                        if (!in_array($carta, $baraja)) {
                            $baraja[] = $carta;
                            $numCartas--;
                        }
                    }
                    echo json_encode($baraja);
                } else {
                    echo "La cantidad de cartas no puede ser menor a 1 ni mayor a 40.";
                }
                ?>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>

        </div>
    </body>
</html>
