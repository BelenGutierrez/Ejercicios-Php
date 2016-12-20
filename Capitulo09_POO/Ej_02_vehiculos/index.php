<!DOCTYPE html>
<!--
Crea la clase Vehiculo , así como las clases Bicicleta y Coche como subclases de la primera. Para la
clase Vehiculo , crea los métodos de clase getVehiculosCreados() y getKmTotales() ; así como el
método de instancia getKmRecorridos() . Crea también algún método específico para cada una de
las subclases. Prueba las clases creadas mediante una aplicación que realice, al menos, las siguientes
acciones:

Anda con la bicicleta
Haz el caballito con la bicicleta
Anda con el coche
Quema rueda con el coche
Ver kilometraje de la bicicleta
Ver kilometraje del coche
Ver kilometraje total
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
                <h1>Vehículos</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                include_once 'Bicicleta.php';
                include_once 'Coche.php';

                // crea una bicicleta con 21 marchas
                $miBici = new Bicicleta("21");

                // crea un coche con 1900cc de cilindrada
                $miCoche = new Coche(1900);

                $miBici->recorre(40);
                $miCoche->recorre(200);
                echo $miBici->sinAgarrar() . "<br>";
                echo $miCoche->aparca() . "<br>";
                $miBici->recorre(60);
                echo "Mi bici ha recorrido " . $miBici->getKmRecorridos() . " Km<br>";
                echo "Mi coche ha recorrido " . $miCoche->getKmRecorridos() . " Km<br>";
                echo "Total creados: " . Vehiculo::getVehiculosCreados() . " vehículos<br>";
                echo "Total acumulado de kilometraje " . Vehiculo::getKmTotales() . " Km<br>";
                ?>
                <br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
