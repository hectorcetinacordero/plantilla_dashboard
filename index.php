<?php
session_start();
if (isset($_SESSION['autentificado']) == "SI") { {
    header("Location: principal.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo.css">
  <title>PLANTILLA DASHBOARD</title>
</head>

<body>
  <div class="contenedor_acceso centrar ancho">

    <div class="contenedor_logo">
      <img class="logo" src="imagenes/logo_tec.png" alt="">
    </div>

    <br>

    <div class="contenedor_info">
      <h1>Login</h1>
      <br>
      <form action="autentificar.php" method="post">
        <?php
        $errorusuario = isset($_GET["errorusuario"]);
        if ($errorusuario == "SI") {
          echo '<h3 class="avisoerror">Datos incorrectos</h3><br><br>';
        }
        ?>
        <input class="elementos" type="text" name="email" placeholder="Correo electronico">
        <input class="elementos" type="password" name="contrasena" placeholder="Contraseña">
        <button type="submit" class="btn_iniciarsesion" name="iniciarsesion">Iniciar sesion</button>
        <br>
        <!-- <hr>
     <a href="registrar.php" class="btn_crearcuenta">Crear cuenta nueva</a> -->
      </form>
    </div>

  </div>

  <div class="ancho centrar abajo">
    <span>© <?php echo date("Y"); ?> <a class="texto_small" href="https://hectorcetina.com/" target="_blank">HECTOR CETINA</a> . Todos los derechos reservados</span>
  </div>

</body>

</html>