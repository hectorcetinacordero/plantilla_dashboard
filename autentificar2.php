<?php
require "conexion.php";

$email = addslashes($_POST['email']);
$contrasena = addslashes($_POST['contrasena']);

// $comparar = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena' ";

$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

$comparar = "SELECT * FROM usuarios WHERE email='$email'";

$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado) > 0) {

  $fila = $resultado->fetch_array();

  if (password_verify($contrasena, $contrasena_encriptada)) {

    session_start();
    $_SESSION['username'] = $email;
    $_SESSION["autentificado"] = "SI";
    header("Location: principal.php");
  }
} else {
  header("Location: index.php?errorusuario=SI");
}
mysqli_free_result($resultado);
mysqli_close($conectar);
