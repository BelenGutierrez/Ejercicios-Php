<!DOCTYPE html>
<!--
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
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
        <h1>
           Multiplicación
        </h1>
      </div>

      <div id="content">
        <?php
          echo $_POST['x'], " * ", $_POST['y'], " = ", $_POST['x'] * $_POST['y'];
        ?>
          <br><br><br><br>
      </div>
         
      <div id="footer">
        © Belén Gutierrez
      </div>
  </div>
    </body>
</html>


