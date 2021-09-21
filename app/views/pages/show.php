<?php
/* 
  ./app/views/pages/show.php

  Available VARIABLES: 
  - $page: ARRAY(id, titre, sousTitre, texte, titreMenu, image, tri)
*/
?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/<?php echo $page['image']; ?>')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php echo $page['titre']; ?></h1>
            <span class="subheading"><?php echo $page['sousTitre']; ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="clearfix">
          <?php echo $page['texte']; ?>
        </div>

        <?php 
        switch ($page['id']):
          case 1:
            include_once '../app/controllers/postsController.php';
            App\Controllers\PostsController\indexAction($conn);
            break;
          case 3:
            include '../app/views/templates/partials/_contactForm.php';
            break;
        endswitch;
        ?>

      </div>
    </div>
  </div>
