<?php
// Iniciar la sesión
session_start();

// Definir la función para verificar el tiempo de la cookie
function verificarTiempoCookie($nombreCookie, $tiempoExpiracion)
{
  if (isset($_COOKIE[$nombreCookie])) {
    // Verificar si el tiempo de la cookie ha expirado
    if (time() - $_COOKIE[$nombreCookie] > $tiempoExpiracion) {
      // Destruir la sesión si ha expirado
      session_unset();  // Limpiar todas las variables de sesión
      session_destroy();  // Destruir la sesión
      setcookie($nombreCookie, '', time() - 3600, '/'); // Eliminar la cookie
      echo "Sesión destruida por expiración de cookie.";
    } else {
      echo "La cookie sigue siendo válida.";
    }
  } else {
    echo "Cookie no establecida.";
  }
}

// Establecer una cookie con la hora actual (por ejemplo, tiempo de inicio de sesión)
$nombreCookie = "tiempo_inicio";
$tiempoExpiracion = 3600; // 1 hora de expiración (3600 segundos)

// Si la cookie no existe, crearla con el tiempo actual
if (!isset($_COOKIE[$nombreCookie])) {
  setcookie($nombreCookie, time(), time() + $tiempoExpiracion, "/");
  echo "Cookie de tiempo de inicio creada.";
}

// Llamar a la función para verificar la cookie
verificarTiempoCookie($nombreCookie, $tiempoExpiracion);
