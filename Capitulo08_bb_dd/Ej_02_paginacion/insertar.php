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
                <h2 class="text-center">Inserción de cliente</h2>
            </div>
            <div id="content">

                <?php
                include "conexion.php";

                $dni = $_POST['dni'];
                $nombre = $_POST['nombre'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];

                //$existeCliente = $conexion->query("SELECT dni FROM cliente WHERE dni ='$_POST[dni]' ");
                $existeCliente = $conexion->query("SELECT dni FROM cliente WHERE dni = $dni ");
                if ($existeCliente->rowCount() > 0) {

                    echo "El cliente ya está en la base de datos. <br>";
                    echo "Por favor regrese a la página principal.";
                    ?>     
                    <a class="btn btn-danger" href="index.php" role="button">
                        <span class="glyphicon glyphicon"></span> Volver

                        <?php
                    } else {
                        ?>
                        <table  class="table table-striped">
                            <tr>
                            <form action = "index.php" method = "post">
                                <th class="text-center" colspan="4"><h3>Desea insertar los datos del nuevo cliente?</h3></th><th></th>
                            <th></th><th></th></tr>
                            <tr>
                                <td>DNI: <input type = "text" name = "dni" value = "<?= $dni ?>" readonly = "readonly"></td>
                                <td>Nombre: <input type = "text" name = "nombre" value = "<?= $nombre ?>" readonly = "readonly"></td>>
                                <td>Dirección: <input type = "text" name = "direccion" value = "<?= $direccion ?>" size = "60" readonly = "readonly"></td>
                                <td>Teléfono: <input type = "text" name = "telefono" value = "<?= $telefono ?>" readonly = "readonly"></td>
                            </tr>
                            <tr>
                                <td></td><td></td>
                                <td><button type="submit" class="btn btn-success" name="accion" value="Nuevo cliente">
                                        <span class="glyphicon glyphicon-ok"></span> Insertar</button>
                                        <a class="btn btn-danger" href="index.php" role="button">
                                    <span class="glyphicon glyphicon-remove"></span> Cancelar
                                            </a></td><td></td><td></td>
                                            
                            </form>
                            </tr>
                        </table>
                        <?php
                    }
                    ?>
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
