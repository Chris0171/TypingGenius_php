<!-- Head start -->
<?php
include ('includes/head_start.inc.php');
?>
<!-- meta tags for SEO -->
<title>Practicar Mecanografía</title>
<meta name="description"
  content="Descubre la importancia de practicar mecanografía en la era digital. Mejora tu productividad, precisión y salud ergonómica mientras te vuelves más competitivo en el ámbito laboral con esta habilidad esencial.">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<link rel="canonical" href="https://tygenius.com/practice.php">

<!-- Open Graph para Facebook y otros -->
<meta property="og:title" content="Practicar Mecanografía">
<meta property="og:description"
  content="Descubre la importancia de practicar mecanografía en la era digital. Mejora tu productividad, precisión y salud ergonómica mientras te vuelves más competitivo en el ámbito laboral con esta habilidad esencial.">
<!-- <meta property="og:image" content="https://www.tusitio.com/images/practice.jpg"> -->
<meta property="og:url" content="https://tygenius.com/practice.php">
<meta property="og:type" content="website">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Practicar Mecanografía">
<meta name="twitter:description"
  content="Descubre la importancia de practicar mecanografía en la era digital. Mejora tu productividad, precisión y salud ergonómica mientras te vuelves más competitivo en el ámbito laboral con esta habilidad esencial.">
<!-- <meta name="twitter:image" content="https://www.tusitio.com/images/practice.jpg"> -->


<!-- Imports -->
<link rel="stylesheet" href="assets/CSS/styles.css" />

<!-- Head end -->
<?php
include ('includes/head_end.inc.php');
?>

<div class="container-fluid p-0 g-0">
  <!-- Header -->
  <?php
  include ('includes/header.inc.php');
  ?>
  <div class="m-0 p-0 mb-5">
    <!-- page content -->
    <?php
    include ("includes/practice.inc.php");
    ?>
  </div>
  <!-- Footer -->
  <?php
  include ('includes/footer.inc.php');
  ?>
</div>

<!-- Proyect script -->
<script type="module" src="assets/JS/index.js"></script>

<!-- End -->
<?php
include ('includes/end.inc.php');

session_unset(); // Limpia todas las variables de sesión
session_destroy(); // Destruye completamente la sesión
?>