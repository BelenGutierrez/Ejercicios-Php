<?php
session_start();
?>
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
        <div id='cuerpo'></div>
        <div id="container">
            <div id="header">
                <h1>Isla Mujeres</h1>

                <h2>Enjoy it!!!</h2>
            </div>

            <div id="content">
                <div id="excursion">
                    <h3>Excursiones</h3><hr>



                    <?php
                    // ---------------Tienda ---------------------------------------------------

                    $_SESSION['excursiones'] = array(
                        "exc1" => array("categoria" => "acuatica", "nombre" => "Mujeres", "precio" => 1000, "imagen" => "mujeres.jpg", "detalle" => "Bla bla bla bla bla bla bla bla."),
                        "exc2" => array("categoria" => "acuatica", "nombre" => "Buceo", "precio" => 2400, "imagen" => "buceo.jpg", "detalle" => "Bla bla bla bla bla bla bla bla."),
                        "exc3" => array("categoria" => "acuatica", "nombre" => "Canoa", "precio" => 2850, "imagen" => "canoa.jpeg", "detalle" => "Bla bla bla bla bla bla bla bla."),
                        "exc4" => array("categoria" => "aerea", "nombre" => "Tirolina", "precio" => 1600, "imagen" => "tirolina.jpg", "detalle" => "Bla bla bla bla bla bla bla bla.")
                    );



                    foreach ($_SESSION['excursiones'] as $codigo => $articulo) {
                        ?>
                        <div><a name="<?= $codigo ?>"></a><img src="/img/<?= $articulo[imagen] ?>"><br>
                            <?= $articulo[nombre] ?><br>Precio: <?= $articulo[precio] ?> mxn

                            <form action="#<?= $codigo ?>" method="post">
                                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                <input type="hidden" name="accion" value="comprar">                          
                                <input class="compra" type="submit" value="Comprar">
                            </form>
                            <form action="detalle.php" method="post">
                                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                <input type="hidden" name="accion" value="detalle">                          
                                <input class="detalle" type="submit" value="Detalle">
                            </form></div><br>
                        <?php
                    }
                    ?>

                </div>

                <div id="carro">			
                    <h3>Carrito</h3><hr>

                    <?php
                    // ------------------------Carrito ------------------------------------------------

                    $accion = $_POST['accion'];
                    $codigo = $_POST['codigo'];

                    // Inicializa el carrito la primera vez
                    if (!isset($_SESSION['carrito'])) {
                        $_SESSION['carrito'] = array("exc1" => 0, "exc2" => 0, "exc3" => 0, "exc4" => 0);
                    }

                    if ($accion == "comprar") {
                        $_SESSION['carrito'][$codigo] ++;
                    }

                    if ($accion == "eliminar") {
                        $_SESSION['carrito'][$codigo] = 0;
                    }

                    // -----------------Muestra carrito y su contenido----------------------------------

                    $total = 0;
                    foreach ($_SESSION['excursiones'] as $codigo => $articulo) {
                        if ($_SESSION['carrito'][$codigo] > 0) {
                            $total = $total + ($_SESSION['carrito'][$codigo] * $articulo[precio]);
                            ?>
                            <div><img src="/img/<?= $articulo[imagen] ?>"><br>
                                <?= $articulo[nombre] ?><br>Precio: <?= $articulo[precio] ?> mxn<br>
                                Unidades: <?= $_SESSION['carrito'][$codigo] ?>
                                <form action="#" method="post">
                                    <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input class="eliminar" type="submit" value="Eliminar">
                                </form></div><br><br>
                            <?php
                        }
                    }
                    ?>
                    <b>Total: <?= $total ?> mxn</b>
                </div>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>

