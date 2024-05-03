<?php

function generatePass()
{
  // Generar bytes aleatorios
  $bytes = random_bytes(5); // 5 bytes generarán una cadena de 10 caracteres

  // Convertir bytes a una cadena legible
  $pass = bin2hex($bytes);

  return $pass;
}

function sortUsers($allUsers)
{
  usort($allUsers, function ($a, $b) {
    // * Compare by level (descending order)
    if ($a['nivel'] != $b['nivel']) {
      return $b['nivel'] - $a['nivel'];
    } else {
      // * If the levels are the same, compare by errors (ascending order)
      return $a['errores'] - $b['errores'];
    }
  });

  return $allUsers;
}

?>