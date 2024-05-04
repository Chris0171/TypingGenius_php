<?php

include "../includes/toolkit/functions.php";
include "../includes/db_connection.inc.php";

$conn = new DbConnection("localhost", "root", "Codecreatoruserunknown01", "typinggenius_db");

$conn->connect();

$alias = $_POST['alias'];
$level = $_POST['level'];
$errors = $_POST['errors'];

$password = generatePass();

echo $password;

$passHash = password_hash($password, PASSWORD_DEFAULT);

// Consulta SQL con marcadores de posición
$query = "INSERT INTO Usuarios (alias, nivel, errores, pass) VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = $conn->getConn()->prepare($query);

// Vincular parámetros
$stmt->bind_param("siis", $alias, $level, $errors, $passHash);

if ($stmt->execute()) {
  echo "Inserción exitosa";
} else {
  echo "Error en la inserción: " . $conn->getConn()->error;
}
$stmt->close();

?>