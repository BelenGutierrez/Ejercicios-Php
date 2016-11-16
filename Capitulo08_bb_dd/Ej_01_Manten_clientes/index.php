<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 1
Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente
de la base de datos banco .
• Para realizar el listado bastará un SELECT, tal y como se ha visto en los ejemplos.
• El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
registro. Luego esos datos se enviarán a una página que ejecutará INSERT .
• Para realizar una baja, se mostrará un botón que ejecutará DELETE .
• La modificación se realiza mediante UPDATE .
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
                <h3 class="text-center">Mantemiento de clientes</h3>

            </div>


            <div id="content">

                <?php
                include "conexion.php";

                $accion = $_POST['accion'];

                if ($accion == "Nuevo cliente") {
                    $inserta = "INSERT INTO cliente VALUES ('$_POST[dni]', '$_POST[nombre]', '$_POST[direccion]', '$_POST[telefono]')";
                    $conexion->exec($inserta);
                }

                if ($accion == "Modificar") {
                    $modifica = "UPDATE cliente SET  nombre='$_POST[nombre]', direccion='$_POST[direccion]', telefono='$_POST[telefono]' WHERE dni='$_POST[dni]'";
                    $conexion->exec($modifica);
                }

                if ($accion == "Eliminar") {
                    $elimina = "DELETE FROM cliente WHERE dni='$_POST[dni]'";
                    $conexion->exec($elimina);
                }

                // Listado ----------------------------------------------------

                $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente");
                ?>

                <table  class="table table-striped">
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th></th><th></th>
                    </tr>

                    <?php
                    // foreach ($consulta->fetchObjet as $cliente ) {
                    while ($cliente = $consulta->fetchObject()) {
                        ?>
                        <tr>
                            <td><?= $cliente->dni ?></td>
                            <td><?= $cliente->nombre ?></td>
                            <td><?= $cliente->direccion ?></td>
                            <td><?= $cliente->telefono ?></td>
                            <td>
                                <form action="#" method="post">
                                    <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                                    <input type="hidden" name="accion" value="Eliminar">
                                    <button type="submit" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span> Eliminar
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="modificar.php" method="post">
                                    <input type="hidden" name="dni" value="<?= $cliente->dni ?>">  
                                    <input type="hidden" name="nombre" value="<?= $cliente->nombre ?>">
                                    <input type="hidden" name="direccion" value="<?= $cliente->direccion ?>">
                                    <input type="hidden" name="telefono" value="<?= $cliente->telefono ?>">
                                    <button type="submit" class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil"></span>Modificar
                                    </button>
                                </form>
                            </td>  
                        </tr>
                        <?php
                    }
                    ?>
                    <!-- Añadir un nuevo cliente ---------------------------------->

                    <form action="#" method="post">
                        <input type="hidden" name="accion" value="Nuevo cliente">
                        <tr>
                            <td><input type="text" name="dni" size="10"></td>
                            <td><input type="text" name="nombre"></td>
                            <td><input type="text" name="direccion"></td>
                            <td><input type="text" name="telefono"  size="12"></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Nuevo cliente
                                </button>
                            </td>
                        </tr>
                    </form>
                </table>
                <br>
                Número de clientes: <?= $consulta->rowCount() ?>


            </div>

            <div id="footer" class="text-center">
                © Belén Gutierrez
            </div>
        </div>
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
