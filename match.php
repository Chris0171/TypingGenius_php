<!-- Head start -->
<?php
include ('includes/head_start.inc.php');
?>

<!-- Imports -->
<link rel="stylesheet" href="assets/CSS/styles.css" />
<link rel="stylesheet" href="assets/CSS/match-styles.css" />
<!-- Google Fonts links -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet" />

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
    include ("includes/match.inc.php");
    ?>
  </div>
  <!-- Footer -->
  <?php
  include ('includes/footer.inc.php');
  ?>
</div>

<!-- Proyect script -->
<script type="module" src="assets/JS/match.js"></script>

<!-- End -->
<?php
include ('includes/end.inc.php');
?>