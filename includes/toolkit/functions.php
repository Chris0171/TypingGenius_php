<?php

function generatePass()
{
  // Generar bytes aleatorios
  $bytes = random_bytes(5); // 5 bytes generarán una cadena de 10 caracteres

  // Convertir bytes a una cadena legible
  $contraseña = bin2hex($bytes);

  return $contraseña;
}

?>