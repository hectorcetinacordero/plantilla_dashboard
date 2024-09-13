<?php
$usuario = $_SESSION['username'];
?>
<div class="contenedor_logo2">
  <a href="principal.php">
    <img src="imagenes/logo_tec.png" alt="">
  </a>
</div>
<h4 class="usuario_estilo">
  <?php echo $usuario; ?>
</h4>
<div class="menu_dashboard">
  <ul>
    <li> <a href="#">Opcion 1</a></li>
    <li> <a href="#">Opcion 2</a></li>
    <li> <a href="#">Opcion 3</a></li>
    <li> <a href="dashboard_usuarios.php">Usuarios</a></li>
  </ul>
</div>