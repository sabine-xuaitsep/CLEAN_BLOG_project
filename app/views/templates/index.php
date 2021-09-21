<?php
/* 
  ./app/views/templates/index.php
*/
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include_once '../app/views/templates/partials/_head.php'; ?>

  </head>

  <body>

    <!-- Navigation -->
    <?php include '../app/views/templates/partials/_nav.php'; ?>

    <!-- CONTENU -->
    <main>

      <?php echo $content; ?>

      <hr>

    </main>

    <!-- Footer -->
    <?php include '../app/views/templates/partials/_footer.php'; ?>

    <?php include '../app/views/templates/partials/_scripts.php'; ?>

  </body>

</html>
