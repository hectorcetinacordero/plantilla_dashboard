<?php
require "seguridad.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>PLANTILLA DASHBOARD - REGISTRAR</title>
</head>

<body>
  <div class="contenedor_dashboard">
    <div class="contenedor_menu">
      <?php
      include "menupanel.php";
      ?>
    </div>
    <div class="contenedor_panel">
      <div class="contenedor_salir">
        <a href="salir.php">Salir <span class="cerrar">&#8855;</span></a>
      </div>
      <br>
      <div class="contenedor_panel_info">
        <h1>PANEL ADMINISTRATIVO</h1>
        <br>
        <img class="fotopanel" src="imagenes/foto_admin.jpg" alt="">
      </div>
    </div>
  </div>

</body>

</html>