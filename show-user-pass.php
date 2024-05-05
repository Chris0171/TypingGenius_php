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
  if (isset($_SESSION['generated_password']) && isset($_SESSION["alias"])) {
    $pass = $_SESSION['generated_password'];
    $alias = $_SESSION["alias"];
    ?>
  <!-- page content -->
  <div class="row justify-content-center m-0 align-items-center mt-5 mb-5">
    <div class="col-12 col-md-10 col-lg-5 card-bg-tech p-5 text-center">
      <h2 class="fw-bold text-warning mb-5">CONTRASEÑA AUTOGENERADA</h2>
      <h5>Se ha generado una contraseña para tu alias
        <span class="text-warning">[<?php echo $alias; ?>]</span>
      </h5>
      <div class="p-2 text-center passBox mb-3">
        <p class="display-3 fw-bold text-white text-center m-0 p-1" id="passToCopy"><?php echo $pass; ?></p>
      </div>
      <div class="alert alert-success" id="copyAlert">
        La contraseña a sido copiada al portapapeles.
      </div>
      <div class="text-center mb-2">
        <button class="btnCopy">COPIAR</button>
      </div>
    </div>
  </div>
  <?php
  } else {
    ?>
  <div class="row justify-content-center m-0 align-items-center mb-2 mt-5">
    <div class="col-12 col-md-10 col-lg-5 p-0 text-center">
      <div class="alert alert-danger fw-bold">
        Lo siento, ha ocurrido algún error.
      </div>
    </div>
  </div>

  <div class="row justify-content-center m-0 align-items-center mb-5">
    <div class="col-12 col-md-10 col-lg-5 card-bg-tech p-5 text-center">
      <h2 class="fw-bold text-warning mb-5">CONTRASEÑA AUTOGENERADA</h2>
      <h5>No se ha podido obtener la contraseña de forma segura.</h5>
      <div class="p-2 text-center passBox mb-3">
        <p class="display-3 fw-bold text-white text-center m-0 p-1" id="passToCopy"><span class="text-danger">NO
            GENERADA</span></p>
      </div>
      <div class="alert alert-success fw-bold" id="copyAlert">
        Mensaje copiado en el portapapeles.
      </div>
      <div class="text-center mb-2">
        <button class="btnCopy">COPIAR</button>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
  <!-- Footer -->
  <?php
  include ('includes/footer.inc.php');
  ?>
</div>

<!-- Proyect script -->
<script src="assets/JS/shUserPass.js"></script>

<!-- End -->
<?php
include ('includes/end.inc.php');

session_unset(); // Limpia todas las variables de sesión
session_destroy(); // Destruye completamente la sesión
?>