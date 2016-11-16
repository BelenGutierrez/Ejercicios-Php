<?php
session_start();
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>

        <div id="container">
            <div id="header">
                <h3 class="text-center">Modificación de clientes</h3>
            </div>
            <div id="content">

                <?php
                include "conexion.php";

                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                ?>
                <form action = "index.php" method = "post">
                    DNI: <input type = "text" name = "dni" value = "<?= $dni ?>" readonly = "readonly"><br>
                    Nombre: <input type = "text" name = "nombre" value = "<?= $nombre ?>"><br>
                    Dirección: <input type = "text" name = "direccion" value = "<?= $direccion ?>" size = "60"><br>
                    Teléfono: <input type = "text" name = "telefono" value = "<?= $telefono ?>"><br >

                    <button type="submit" class="btn btn-success" name="accion" value="Modificar">
                        <span class="glyphicon glyphicon-ok"></span> Modificar
                    </button>
                    <a class="btn btn-danger" href="index.php" role="button">
                        <span class="glyphicon glyphicon-remove"></span>Cancelar
                    </a>
                </form>

                <br>

                <?php $conexion->close(); ?>

            </div>

            <div id="footer" class="text-center">
                © Belén Gutierrez
            </div>
        </div>
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
