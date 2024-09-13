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

  <div class="contenedor_acceso centrar ancho">
    <div class="contenedor_logo">
      <a href="index.php">
        <img class="logo" src="imagenes/logo_tec.png" alt="">
      </a>
    </div>
    <br>
    <div class="contenedor_info">
      <h1>Registrate</h1>
      <br>
      <form action="guardar_usuarios.php" method="post">
        <input class="elementos2" type="text" name="nombres" placeholder="Nombre(s)" required>
        <input class="elementos2" type="text" name="apellidos" placeholder="Apellidos">
        <input class="elementos" type="text" name="email" placeholder="Correo electronico" required>
        <input class="elementos" type="text" name="contrasena" maxlength="10" placeholder="Contraseña" required>
        <p class="texto">Fecha de nacimiento</p>
        <input type="date" name="fecha_nacimiento" class="elementos">

        <button class="btn_registrar" type="submit">Registrar</button>
        <br>
        <p class="texto2">Al hacer click en "registrar", aceptas nuestras <a href="#">Condiciones</a> , la <a href="#">Politica de datos</a> y la <a href="#">Politica de cookies</a>. Es posible que te enviemos notificaciones por SMS, que puedes desactvar cuando quieras.</p>
      </form>
    </div>

  </div>
  <div class="ancho centrar abajo">
    <span>© <?php echo date("Y"); ?> <a class="texto_small" href="https://hectorcetina.com/" target="_blank">HECTOR CETINA</a> . Todos los derechos reservados</span>
  </div>


</body>

</html>