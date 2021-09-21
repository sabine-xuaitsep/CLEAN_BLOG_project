<?php
/* 
  ./app/views/templates/partials/_nav.php
*/
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASE_HREF_PUBLIC; ?>">CLEANBLOG</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php 
      include_once '../app/models/pagesModel.php';
      $pages = App\Models\PagesModel\findAll($conn); 

      include '../app/views/pages/nav.php';
      ?>
    </div>
  </div>
</nav>