<!DOCTYPE html>
<!--
Ejercicio 1
Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <title></title>
    </head>
    <body>
       <div id="container">
            <div id="header">
                <h1>Asignatura</h1>
            </div>

            <div id="content">
                
                <?php
                $dia = $_POST['dia'];
                
                switch ($dia){
                    
                    case  "Lunes":
                        echo "A primera hora toca,  Empresa ";
                        break;
                    
                    case "Martes":
                        echo "A primera hora toca,  Interfaces ";
                        break;
                    
                    case "Miercoles":
                        echo "A primera hora toca,  DWEC ";
                        break;
                    
                    case "Jueves":
                        echo "A primera hora toca,  DWES ";
                        break;
                    
                    case "Viernes":
                        echo "A primera hora toca,  DWES ";
                        break;
                    
                    
                    default:
                        echo "El día introducido no es correcto.";
                   
                }

                ?>
                <br><br><br><br>
                <a href="index.html">>> Volver</a>
            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
