<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 5
Crea una tienda on-line sencilla con un catálogo de productos y un carrito de la compra. Un
catálogo de cuatro o cinco productos será suficiente. De cada producto se debe conocer al menos
la descripción y el precio. Todos los productos deben tener una imagen que los identifique. Al lado
de cada producto del catálogo deberá aparecer un botón Comprar que permita añadirlo al carrito.
Si el usuario hace clic en el botón Comprar de un producto que ya estaba en el carrito, se deberá
incrementar el número de unidades de dicho producto. Para cada producto que aparece en el carrito,
habrá un botón Eliminar por si el usuario se arrepiente y quiere quitar un producto concreto del
carrito de la compra. A continuación se muestra una captura de pantalla de una posible solución.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>

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

                    $excursiones = array(
                        "exc1" => array("nombre" => "Mujeres", "precio" => 1000, "imagen" => "mujeres.jpg"),
                        "exc2" => array("nombre" => "Buceo", "precio" => 2400, "imagen" => "buceo.jpg"),
                        "exc3" => array("nombre" => "Canoa", "precio" => 2850, "imagen" => "canoa.jpeg"),
                        "exc4" => array("nombre" => "Tirolina", "precio" => 1600, "imagen" => "tirolina.jpg")
                    );

                    foreach ($excursiones as $codigo => $elemento) {
                        ?>
                        <div><img src="/img/<?= $elemento[imagen] ?>"><br>
                            <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> mxn

                            <form action="#" method="post">
                                <input type="hidden" name="codigo" value="<?= $codigo ?>">
                                <input type="hidden" name="accion" value="comprar">
                                <input type="submit" value="Comprar">
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

                    // -----------------Muestra el contenido del carrito----------------------------------

                    $total = 0;
                    foreach ($excursiones as $cant => $elemento) {
                        if ($_SESSION['carrito'][$cant] > 0) {
                            $total = $total + ($_SESSION['carrito'][$cant] * $elemento[precio]);
                            ?>
                            <div><img src="/img/<?= $elemento[imagen] ?>"><br>
                                <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> mxn<br>
                                Unidades: <?= $_SESSION['carrito'][$cant] ?>
                                <form action="#" method="post">

                                    <input type="hidden" name="codigo" value="<?= $cant ?>">
                                    <input type="hidden" name="accion" value="eliminar">
                                    <input type="submit" value="Eliminar">
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
