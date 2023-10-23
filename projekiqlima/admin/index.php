<?php
include("../koneksi.php");
session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("./komponen/head.html"); ?>
</head>

<body>

  <div class="container">
    <?php
    // include("./admin.php");
    if (empty($_SESSION['username'])) {
      include("./konten/login.php");
    } else {
      include("./admin.php");
    }
    ?>

  </div>

</body>

</html>