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
        <title>Conversor</title>
    </head>
    <body>
        <div id="container">

            <div id="header">
                <h1>Conversor euros - pesetas</h1>
            </div>

            <div id="content">
                <?php
                $monedaIntro = $_GET['moneda'];
                $cantidadIntro = $_GET['cantidad'];
                if ($cantidadIntro > 0) {
                    if ($monedaIntro == 'euros') {
                        $total = $cantidadIntro * 166.38;
                        $resultado[] = [
                            'moneda' => 'pesetas',
                            'cantidad' => number_format($total, 2, '.', '')
                        ];
                        echo json_encode($resultado);
                    } else if ($monedaIntro == 'pesetas') {
                        $total = $cantidadIntro / 166.38;
                        $resultado[] = [
                            'moneda' => 'euros',
                            'cantidad' => number_format($total, 2, '.', '')
                        ];
                        echo json_encode($resultado);
                    } else {
                        echo "Tipo de moneda incorrecto. Solo es posible euro o pesetas";
                    }
                } else {
                    echo "La cantidad no puede ser menor a 0";
                }
                ?>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>

        </div>
    </body>
</html>
