<!-- Head start -->
<?php
include ('includes/head_start.inc.php');
?>
<!-- meta tags for SEO -->
<title>Mecanografía | Inicio</title>
<meta name="description"
  content="TypingGenius. Bienvenidos a nuestro sitio web de mecanografía. Conoce todo detrás de esta habilidad imensamente demandada hoy en día dentro del sector tecnológico.">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<link rel="canonical" href="https://tygenius.com/index.php">

<!-- Open Graph para Facebook y otros -->
<meta property="og:title" content="Mecanografía | Inicio">
<meta property="og:description"
  content="TypingGenius. Bienvenidos a nuestro sitio web de mecanografía. Conoce todo detrás de esta habilidad imensamente demandada hoy en día dentro del sector tecnológico.">
<!-- <meta property="og:image" content="https://www.tusitio.com/images/homepage.jpg"> -->
<meta property="og:url" content="https://tygenius.com/index.php">
<meta property="og:type" content="website">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mecanografía | Inicio">
<meta name="twitter:description"
  content="TypingGenius. Bienvenidos a nuestro sitio web de mecanografía. Conoce todo detrás de esta habilidad imensamente demandada hoy en día dentro del sector tecnológico.">
<!-- <meta name="twitter:image" content="https://www.tusitio.com/images/homepage.jpg"> -->

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
    include ("includes/index.inc.php");
    ?>
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