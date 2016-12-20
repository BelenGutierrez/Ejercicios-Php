<!DOCTYPE html>
<!--
Ejercicio 1
Crea las clases Animal , Mamifero , Ave , Gato , Perro , Canario , Pinguino y Lagarto . Crea, al menos,
tres métodos específicos de cada clase y redefine el/los método/s cuando sea necesario. Prueba las
clases en un programa en el que se instancien objetos y se les apliquen métodos. Puedes aprovechar
las capacidades que proporciona HTML y CSS para incluir imágenes, sonidos, animaciones, etc.
para representar acciones de objetos; por ejemplo, si el canario canta, el perro ladra, o el ave vuela.
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
                <h1>Animales</h1>
            </div>

            <div id="content">
                <br><br>
                <?php
                include_once 'Canario.php';
                include_once 'Gato.php';
                include_once 'Lagarto.php';
                include_once 'Perro.php';
                include_once 'Pinguino.php';

                $gato1 = new Gato("Silvestre", "macho", "Callejero");
                //echo $gato1 .  "<br>" ;
                echo $gato1->cazaRatones();
                echo "<br>";
                echo $gato1->bebe();
                echo "<br>";
                echo "*******************************************";
                echo "<br>";

                $perro1 = new Perro("Rex", "macho", "Pastor Alemán");
                echo $perro1->getNombre() . "<br>" .  $perro1->getSexo();
                echo $perro1->vigilaLaCasa() . "<br>";
                echo $perro1->escondeHueso() . "<br>";
                echo $perro1->muerde();
                echo "<br>";
                echo "*******************************************";
                echo "<br>";

                $canario1 = new Canario("Tweety", "macho", "Canarisaurius");
                echo $canario1->getNombre() . "<br>" . $canario1->getSexo();
                echo $canario1->canta() . "<br>";
                echo $canario1->comeLombriz() . "<br>";
                echo $canario1->ponHuevos("macho");
                echo "<br>";
                echo "*******************************************";
                echo "<br>";

                $canario2 = new Canario("Canarita", "hembra", "Canarisaurius");
                echo $canario2->getNombre() . "<br>" . $canario2->getSexo();
                echo $canario2->ponHuevos("hembra");
                echo "<br>";
                echo "*******************************************";
                echo "<br>";

                $pinguino1 = new Pinguino("Penguin", "hembra", "Emperador");
                echo $pinguino1->getNombre() . "<br>" . $pinguino1->getSexo();
                echo $pinguino1->vuela() . "<br>";
                echo $pinguino1->corre() . "<br>";
                echo $pinguino1->nada();
                echo "<br>";
                echo "*******************************************";
                echo "<br>";

                $lagarto1 = new Lagarto("Lagarta", "hembra", "Camaleón");
                echo $lagarto1->getNombre() . "<br>" . $lagarto1->getSexo();
                echo $lagarto1->sacaLengua() . "<br>";
                echo $lagarto1->repta() . "<br>";
                echo $lagarto1->hiberna();
                ?>
                <br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
