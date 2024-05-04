<?php

include "../includes/toolkit/functions.php";
include "../includes/db_connection.inc.php";

$conn = new DbConnection("localhost", "root", "Codecreatoruserunknown01", "typinggenius_db");

$conn->connect();

$alias = $_POST['alias'];
$level = $_POST['level'];
$errors = $_POST['errors'];

$password = generatePass();

$passHash = password_hash($password, PASSWORD_DEFAULT);

// Consulta SQL con marcadores de posición
$query = "INSERT INTO Usuarios (alias, nivel, errores, pass) VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = $conn->getConn()->prepare($query);

// Vincular parámetros
$stmt->bind_param("siis", $alias, $level, $errors, $passHash);

if ($stmt->execute()) {
  // Iniciar sessión
  session_start();

  // Guardar constraseña
  $_SESSION['generated_password'] = $password;
  $_SESSION['alias'] = $alias;

  // Redireccionar
  header("Location: ../show-user-pass.php");
  exit;
} else {
  echo "Error en la inserción: " . $conn->getConn()->error;
}
$stmt->close();

?>