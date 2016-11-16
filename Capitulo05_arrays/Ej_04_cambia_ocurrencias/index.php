<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
    <body>
        <div id="container">
            <div id="header">
                <h1>Cambia ocurrencias</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                if (!isset($_GET['implotado'])) {
                    $contadorNumIntro = 0;
                    for ($i = 0; $i < 100; $i++) {
                        $numeros[$i] = rand(0, 20);
                    }


                    $implotado = implode(" ", $numeros);

                    if ($contadorNumIntro == 0) {
                        echo "El array original es: <br>";
                        for ($i = 0; $i < 100; $i++) {
                            //$numeros[$i] = rand(0, 20);
                            echo $numeros[$i], " ";
                        }
                    }
                    ?>
                    <form action="#" method="get">
                        Número sale:
                        <input type="number" name ="n1" required autofocus>
                        Número queda:
                        <input type="number" name ="n2" required>
                        <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumIntro ?>">
                        <input type="hidden" name="implotado" value="<?php echo $implotado; ?>">
                        <input type="submit" value="OK">
                    </form>
                    <?php
                }

                $numIntro1 = $_GET['n1'];
                $numIntro2 = $_GET['n2'];
                $contadorNumIntro = $_GET['contadorNumeros'];
                $implotado = $_GET['implotado'];

                $numeros = explode(" ", $implotado);
                if ($contadorNumIntro == 1) {

                    echo "El array original es: <br>";
                    for ($i = 0; $i < 100; $i++) {

                        echo $numeros[$i], " ";
                    }


                    echo "<br><br>Con ocurrencias cambiadas es: <br>";
                    foreach ($numeros as $n) {
                        if ($n == $numIntro1) {
                            $n = $numIntro2;
                            echo "<span style='color:red'>", $n, " </span>";
                        } else {
                            echo $n, " ";
                        }
                    }
                }
                ?>
                <br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
