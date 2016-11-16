<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado.
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
        <h1>Conversor pesetas a euros</h1>
      </div>

      <div id="content">
        <?php
        $euro = 166.386;
          echo $_POST['peseta'], " pesetas, son:  ", $_POST['peseta'] / $euro, " euros";
        ?>
          <br><br><br><br>
      </div>
        
      <div id="footer">
        © Belén Gutierrez
      </div>
  </div>
    </body>
</html>
