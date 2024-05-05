<!-- Head start -->
<?php
include ('includes/head_start.inc.php');
?>

<!-- Imports -->
<link rel="stylesheet" href="assets/CSS/styles.css" />

<?php
include ('includes/head_end.inc.php');

include "includes/toolkit/functions.php";
include "includes/db_connection.inc.php";
include "config.php";

$conn = new DbConnection($database["host"], $database["username"], $database["password"], $database["dbName"]);

$conn->connect();

$allUsers = $conn->query("SELECT * FROM Usuarios");
$rows = array();

if ($allUsers) {
  // Recorrer el conjunto de resultados para almacenar cada fila en el array
  while ($row = $allUsers->fetch_assoc()) {
    $rows[] = $row;
  }
  $uses = sortUsers($rows);
}

?>

<div class="container-fluid p-0 g-0">
  <!-- Header -->
  <?php
  include ('includes/header.inc.php');
  ?>
  <!-- page content -->
  <div class="row justify-content-center m-0 align-items-center mt-5 mb-5">
    <div class="col-12 col-md-10 col-lg-8 card-bg-tech p-5">
      <div class="scrollTable">
        <table class="text-center p-3 text-white tableSt">
          <thead class="">
            <tr>
              <th scope="col">Posición</th>
              <th scope="col">Alias</th>
              <th scope="col">Nivel</th>
              <th scope="col">Errores</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($i = 0; $i < count($uses); $i++) {
              ?>
            <tr>
              <td><?php echo ($i + 1) ?></td>
              <td><?php echo $uses[$i]['alias'] ?></td>
              <td><?php echo $uses[$i]['nivel'] ?></td>
              <td><?php echo $uses[$i]['errores'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  include ('includes/footer.inc.php');
  ?>
</div>

<!-- Proyect script -->
<script src="assets/JS/scores.js"></script>

<!-- End -->
<?php
include ('includes/end.inc.php');
?>