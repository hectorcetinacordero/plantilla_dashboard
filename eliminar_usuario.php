<?php
require "conexion.php";
$id_usuario = $_GET['id'];

$eliminar = "DELETE FROM usuarios WHERE id_usuario='$id_usuario'";

$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
  header("location:dashboard_usuarios.php");
} else {
  echo "no se pudo eliminar el dato";
}
