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
                <h2 class="text-center">Modificación de clientes</h2>
            </div>
            <div id="content">

                <?php
               // include "conexion.php";

                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                ?>
                <table  class="table table-striped">
                <form action = "index.php" method = "post">
                    <tr>
                    <th class="text-center" colspan="4"><h3 class="text-center">Desea modificar los datos del cliente?</h3></th>
                    </tr>
                    <tr>
                    <td>DNI: <input type = "text" name = "dni" value = "<?= $dni ?>" readonly = "readonly"></td>
                    <td>Nombre: <input type = "text" name = "nombre" value = "<?= $nombre ?>"></td>
                    <td>Dirección: <input type = "text" name = "direccion" value = "<?= $direccion ?>" size = "60"></td>
                    <td>Teléfono: <input type = "text" name = "telefono" value = "<?= $telefono ?>"></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><button type="submit" class="btn btn-success" name="accion" value="Modificar">
                        <span class="glyphicon glyphicon-ok"></span> Modificar
                    </button>
                    <a class="btn btn-danger" href="index.php" role="button">
                        <span class="glyphicon glyphicon-remove"></span>Cancelar
                    </a></td><td></td><td></td>
                </form>
                </tr>
                </table>
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
