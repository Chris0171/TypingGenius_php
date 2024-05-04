<?php

// include "../includes/toolkit/functions.php";
include "../includes/db_connection.inc.php";

$conn = new DbConnection("localhost", "root", "Codecreatoruserunknown01", "typinggenius_db");

$conn->connect();

$data = json_decode(file_get_contents("php://input"), true);

if ($data != null) {
  $alias = $data['alias'];
  $pass = $data['password'];

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
        $res = array("isCorrect" => true);
        header('Content-Type: application/json');
        echo json_encode($res);
      } else {
        $res = array("isCorrect" => false);
        header('Content-Type: application/json');
        echo json_encode($res);
      }
    } else {
      $res = array("isCorrect" => "error");
      header('Content-Type: application/json');
      echo json_encode($res);
    }
  } else {
    echo "Error en la inserción: " . $conn->getConn()->error;
  }

  $stmt->close();

} else {
  $res = array("isCorrect" => "error");
  header('Content-Type: application/json');
  echo json_encode($res);
}


?>