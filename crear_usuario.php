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
        <h1>CREAR USUARIO</h1>
        <br>
        <div class="submenu_dashboard">
          <a href="dashboard_usuarios.php" class="btn_regresar">
            << Regresar</a>
        </div>
        <br><br>
        <form action="guardar_usuarios2.php" method="post">
          <input class="elementos2" type="text" name="nombres" placeholder="Nombre(s)" required>
          <input class="elementos2" type="text" name="apellidos" placeholder="Apellidos">
          <input class="elementos" type="text" name="email" placeholder="Correo electronico" required>
          <input class="elementos" type="text" name="contrasena" maxlength="10" placeholder="Contraseña" required>
          <p class="texto">Fecha de nacimiento</p>
          <input type="date" name="fecha_nacimiento" class="elementos">

          <button class="btn_registrar" type="submit">Registrar</button>
          <br>
        </form>
        <br>
      </div>
    </div>
  </div>

</body>

</html>