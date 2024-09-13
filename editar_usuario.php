<?php
require "conexion.php";
$id_usuario = $_GET['id'];
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
        <h1>EDITAR USUARIO</h1>
        <br>
        <div class="submenu_dashboard">

          <?php
          $verusuario = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
          $resultado = mysqli_query($conectar, $verusuario);
          $fila = $resultado->fetch_array();
          ?>

          <a href="ver_usuario.php?id=<?php echo $fila["id_usuario"]; ?>" class="btn_regresar">
            << REGRESAR</a>

        </div>
        <br><br>
        <form action="guardar_usuarios2_editar.php" method="post">
          <input class="elementos2" type="text" name="nombres" placeholder="Nombre(s)" required value="<?php echo $fila["nombres"] ?>">
          <input class="elementos2" type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $fila["apellidos"] ?>">
          <input class="elementos" type="text" name="" placeholder="Correo electronico" required value="<?php echo $fila["email"] ?>" disabled>
          <input class="elementos" type="text" name="contrasena" maxlength="10" placeholder="Contraseña" required value="<?php echo $fila["contrasena"] ?>">
          <p class="texto">Fecha de nacimiento</p>
          <input type="date" name="fecha_nacimiento" class="elementos" value="<?php echo $fila["fecha_nacimiento"] ?>">

          <!-- hidden -->
          <input type="hidden" name="id_usuario" value="<?php echo $fila["id_usuario"]; ?>">
          <input type="hidden" name="email" value="<?php echo $fila["email"]; ?>">
          <button class="btn_registrar" type="submit">Editar</button>
          <br>
        </form>
        <br>
      </div>
    </div>
  </div>

</body>

</html>