<?php
session_start();
?>
<!DOCTYPE html>
<!--
Ejercicio 4
Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.
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
                <h1>Cambia ocurrencias</h1>
                <h2>Acceso con login</h2>
            </div>

            <div id="content">
                <br><br>
                <?php
                $_SESSION['usuarioGrabado'] = "Ana";
                $_SESSION['contraGrabada'] = 1234;
                $_SESSION['usuarioIntro'] = $_POST['nom'];
                $_SESSION['contraIntro'] = $_POST['pass'];


               //---------------- inicializo logueado-------------------------//

                if (!isset($_SESSION['logueado'])) {
                    $_SESSION['logueado'] = false;
                }
                
                //---------------- verifico el login-------------------------//
                if (isset($_POST['nom'])) {
                    if (($_SESSION['usuarioIntro'] == $_SESSION['usuarioGrabado']) &&
                            ($_SESSION['contraIntro'] == $_SESSION['contraGrabada'])) {
                        $_SESSION['logueado'] = true;
                    }
                }
                
                if (!$_SESSION['logueado']) {
                    ?>
                    <h3>Por favor introduzca los datos para acceder</h3>
                    <form action="#" method="post">
                        Usuario:
                        <input type="text" name ="nom" required autofocus>
                        Contraseña:
                        <input type="number" name ="pass" required>

                        <input type="submit" value="OK">
                    </form>
                    <?php
                }

                if ($_SESSION['logueado']) {

                    if (!isset($_GET['implotado'])) {
                        
                        $contadorNumIntro = 0;
                        for ($i = 0; $i < 100; $i++) {
                            $numeros[$i] = rand(0, 20);
                        }

                        $implotado = implode(" ", $numeros);

                        if ($contadorNumIntro == 0) {
                            echo "El array original es: <br>";
                            for ($i = 0; $i < 100; $i++) {
                                //$numeros[$i] = rand(0, 20);
                                echo $numeros[$i], " ";
                            }
                        }
                        ?>
                        <form action="#" method="get">
                            Número sale:
                            <input type="number" name ="n1" required autofocus>
                            Número queda:
                            <input type="number" name ="n2" required>
                            <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumIntro ?>">
                            <input type="hidden" name="implotado" value="<?php echo $implotado; ?>">
                            <input type="submit" value="OK">
                        </form>
                        <?php
                    }

                    $numIntro1 = $_GET['n1'];
                    $numIntro2 = $_GET['n2'];
                    $contadorNumIntro = $_GET['contadorNumeros'];
                    $implotado = $_GET['implotado'];

                    $numeros = explode(" ", $implotado);
                    if ($contadorNumIntro == 1) {

                        echo "El array original es: <br>";
                        for ($i = 0; $i < 100; $i++) {

                            echo $numeros[$i], " ";
                        }

                        echo "<br><br>Con ocurrencias cambiadas es: <br>";
                        foreach ($numeros as $n) {
                            if ($n == $numIntro1) {
                                $n = $numIntro2;
                                echo "<span style='color:red'>", $n, " </span>";
                            } else {
                                echo $n, " ";
                                session_destroy();
                            }
                        }
                    }
                    
                }
                ?>
                <br><br>

            </div>

            <div id="footer">
                © Belén Gutierrez
            </div>
        </div>
    </body>
</html>
