<?php

include "../includes/toolkit/functions.php";
include "../includes/db_connection.inc.php";

$conn = new DbConnection("localhost", "root", "Codecreatoruserunknown01", "typinggenius_db");

$conn->connect();

$allUsers = $conn->query("SELECT alias FROM Usuarios");

$rows = array();

if ($allUsers) {
  // Recorrer el conjunto de resultados para almacenar cada fila en el array
  while ($row = $allUsers->fetch_assoc()) {
    $rows[] = $row;
  }
  header('Content-Type: application/json');
  echo json_encode($rows);
} else {
  header('Content-Type: application/json');
  echo json_encode(array("error" => "no se han encontrado usuarios..."));
}

?>