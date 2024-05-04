<?php

// include "../includes/toolkit/functions.php";
include "../includes/db_connection.inc.php";

$conn = new DbConnection("localhost", "root", "Codecreatoruserunknown01", "typinggenius_db");

$conn->connect();

$alias = $_POST['alias'];
$level = $_POST['level'];
$errors = $_POST['errors'];
$pass = $_POST['password'];

// $alias = "Unknown0";
// $level = 3;
// $errors = 16;
// $pass = "d245a6f966";

// Consulta SQL con marcadores de posición
$query = "SELECT pass FROM Usuarios Where alias = ?";

// Preparar la consulta
$stmt = $conn->getConn()->prepare($query);

// Vincular parámetros
$stmt->bind_param("s", $alias);

// Ejecutar actualización
if ($stmt->execute()) {
  $stmt->bind_result($bd_pass);
  if ($stmt->fetch()) {
    if (password_verify($pass, $bd_pass)) {
      // Se han actualizado los valores
      $stmt->close();
      $query = "UPDATE Usuarios SET nivel = ?, errores = ? WHERE alias = ?";
      $stmt = $conn->getConn()->prepare($query);
      $stmt->bind_param("iis", $level, $errors, $alias);

      // Ejecutar actualización
      if ($stmt->execute()) {
        echo "Actualización exitosa";
      } else {
        echo "Error en la actualización: " . $conn->getConn()->error;
      }
    }
  } else {
    echo "No se encontró ningún usuario con el alias especificado.";
  }
} else {
  echo "Error en la inserción: " . $conn->getConn()->error;
}

$stmt->close();

?>