<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 2
Modifica el programa anterior añadiendo las siguientes mejoras:
• El listado debe aparecer paginado en caso de que haya muchos clientes.
• Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido en
el formulario.
• La opción de borrado debe pedir confirmación.
• Cuando se realice la modificación de los datos de un cliente, los campos que no se han
cambiado deberán permanecer inalterados en la base de datos.
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

                if (!isset($_SESSION['pagina'])) {
                    $_SESSION['pagina'] = 1;
                }


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
                
                // MUESTRA PAGINA------------------------------------------------//

                $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente ");
                $numClientes = $consulta->rowCount();
                $numPaginas = floor(abs($numClientes - 1) / 5) + 1;

                $pagina = $_POST['pagina'];

                if ($pagina == "primera") {
                    $_SESSION['pagina'] = 1;
                }

                if (($pagina == "anterior") && ($_SESSION['pagina'] > 1)) {
                    $_SESSION['pagina'] --;
                }

                if (($pagina == "siguiente") && ($_SESSION['pagina'] < $numPaginas)) {
                    $_SESSION['pagina'] ++;
                }

                if ($pagina == "ultima") {
                    $_SESSION['pagina'] = $numPaginas;
                }


                // LISTADO TOTAL----------------------------------------------------

                $consulta = $conexion->query("SELECT dni, nombre, direccion, telefono FROM cliente ORDER BY dni LIMIT " . (($_SESSION['pagina'] - 1) * 5) . ", 5");
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
                                <form action="eliminar.php" method="post">
                                    <input type="hidden" name="dni" value="<?= $cliente->dni ?>">
                                    <input type="hidden" name="nombre" value="<?= $cliente->nombre ?>">
                                    <input type="hidden" name="direccion" value="<?= $cliente->direccion ?>">
                                    <input type="hidden" name="telefono" value="<?= $cliente->telefono ?>">

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

                    <!-- NUEVO CLIENTE------------------------------------------>
                    <tr>
                    <form action="insertar.php" method="post">                            
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

                    <!-- PAGINACION ---------------------------------->

                    <tr><td>Página <?= $_SESSION['pagina'] ?> de <?= $numPaginas ?></td>

                        <!-- PRIMERA----------------------------------------->
                        <td>
                            <form action="#" method="post">
                                <button type="submit" name="pagina" value="primera">
                                    <span class="glyphicon glyphicon-step-backward"></span>
                                    Primera
                                </button>
                            </form>
                        </td>

                        <!-- ANTERIOR--------------------------------->
                        <td>
                            <form action="#" method="post">
                                <button type="submit" name="pagina" value="anterior">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    Anterior
                                </button>
                            </form>
                        </td>

                        <!-- SIGUIENTE--------------------------------------------->
                        <td>
                            <form action="#" method="post">
                                <button type="submit" name="pagina" value="siguiente">
                                    Siguiente
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </button>
                            </form>
                        </td>

                        <!-- ULTIMA---------------------------------------------->
                        <td>
                            <form action="#" method="post">
                                <button type="submit" name="pagina" value="ultima">
                                    Última
                                    <span class="glyphicon glyphicon-step-forward"></span>
                                </button>
                            </form>
                        </td>  
                        <td></td>
                    </tr>
                </table>
                <br>
                Número de clientes: <?= $numClientes ?>


            </div>

            <div id="footer" class="text-center">
                © Belén Gutierrez
            </div>
        </div>
        <script src="../js/jquery-2.1.3.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
