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
        <h1>USUARIOS</h1>
        <br>
        <div class="submenu_dashboard">
          <a href="crear_usuario.php" class="btn_ver">Crear Usuario</a>
        </div>
        <br>
        <!-- Tabla mostrar usuarios -->
        <br>
        <table>
          <tr>
            <th class="celdachica">ID</th>
            <th class="celdagrande">Nombres</th>
            <th class="celdagrande">Apellidos</th>
            <th class="celdagrande">Email</th>
            <!-- <th class="celdamediana">Contraseña</th> -->
            <!-- <th class="celdagrande">Fecha de nacimiento</th> -->
            <th class="celdachica">Ver</th>
            <th class="celdachica">Editar</th>
            <th class="celdachica">Eliminar</th>
          </tr>

          <?php
          require "conexion.php";

          $todos_usuarios = "SELECT * FROM usuarios ORDER BY id_usuario ASC";
          $resultado = mysqli_query($conectar, $todos_usuarios);

          while ($fila = $resultado->fetch_array()) {
          ?>

            <tr>
              <td><?php echo $fila["id_usuario"]; ?></td>
              <td><?php echo $fila["nombres"]; ?></td>
              <td><?php echo $fila["apellidos"]; ?></td>
              <td><?php echo $fila["email"]; ?></td>
              <!-- <td><?php //echo $fila["contrasena"];
                        ?></td> -->
              <!-- <td><?php //echo $fila["fecha_nacimiento"];
                        ?></td> -->
              <td><a href="ver_usuario.php?id=<?php echo $fila["id_usuario"]; ?>"><img class="iconos_dashboard" src="imagenes/icono_ver.png" alt=""></a></td>

              <td><a href="editar_usuario.php?id=<?php echo $fila['id_usuario']; ?>"><img src="imagenes/icono_editar.png" alt="" class="iconos_dashboard"></a></td>

              <td><a href="#" onClick="validar('eliminar_usuario.php?id=<?php echo $fila["id_usuario"]; ?>')"><img src="imagenes/icono_eliminar.png" alt="" class="iconos_dashboard"></a></td>
            </tr>
          <?php
          }
          mysqli_free_result($resultado)
          ?>
        </table>
        <br>
      </div>
    </div>
  </div>
  <!-- funcion para validar la eliminacion de los datos -->
  <script>
    function validar(url) {
      var eliminar = confirm("Realmente desesa ELIMINAR el registro?");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>
</body>

</html>