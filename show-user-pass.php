<!-- Head start -->
<?php
include ('includes/head_start.inc.php');
?>

<!-- Imports -->
<link rel="stylesheet" href="assets/CSS/styles.css" />

<?php
include ('includes/head_end.inc.php');
?>

<div class="container-fluid p-0 g-0">
  <!-- Header -->
  <?php
  include ('includes/header.inc.php');
  session_start();
  $pass = $_SESSION['generate_password'];
  $alias = $_SESSION["alias"];
  ?>
  <!-- page content -->
  <div class="row justify-content-center m-0 align-items-center mt-5 mb-5">
    <div class="col-12 col-md-10 card-bg-tech p-5">
      <h3 class="fw-bold text-warning mb-3">TU CONTRASEÑA AUTOGENERADA</h3>
      <h5>Se ha generado una contraseña para tu alias
        <span class="text-warning">[<?php echo $alias; ?>]</span>
      </h5>
      <div class="p-2 text-center passBox">
        <p class="display-3 fw-bold"><?php echo $pass; ?></p>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php
  include ('includes/footer.inc.php');
  ?>
</div>

<!-- End -->
<?php
include ('includes/end.inc.php');

session_unset(); // Limpia todas las variables de sesión
session_destroy(); // Destruye completamente la sesión
?>