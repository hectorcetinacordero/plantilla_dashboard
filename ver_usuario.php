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
        <h1>VER USUARIO</h1>
        <br>
        <div class="submenu_dashboard">
          <a href="dashboard_usuarios.php" class="btn_regresar">
            << Regresar</a>
        </div>

        <div class="contendor_info_usuario margen">


          <?php
          require "conexion.php";
          $id_usuario = $_GET['id'];

          $verusuario = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
          $resultado = mysqli_query($conectar, $verusuario);

          $fila = $resultado->fetch_array();
          ?>

          <div class="infousuarios">
            <p class="textodatos">Nombre del usuario</p>
            <p class="negritas color margen"><?php echo $fila["nombres"] . "&nbsp;" . $fila["apellidos"]; ?></p>
            <hr>
          </div>

          <div class="infousuarios">
            <p class="textodatos">Email:</p>
            <p class="negritas color margen"><?php echo $fila["email"]; ?></p>
            <hr>
          </div>

          <div class="infousuarios">
            <p class="textodatos">Fecha de nacimiento</p>
            <p class="negritas color margen"><?php echo $fila["fecha_nacimiento"]; ?></p>
            <hr>
          </div>

          <div class="infousuarios">
            <p class="textodatos">Contraseña</p>
            <p class="negritas color margen"><?php echo $fila["contrasena"]; ?></p>
            <hr>
          </div>

          <br>
          <a href="editar_usuario.php?id=<?php echo $fila['id_usuario']; ?>" class="btn_crearcuenta">Editar Usuario</a>
        </div>
        <br>
      </div>
    </div>
  </div>

</body>

</html>