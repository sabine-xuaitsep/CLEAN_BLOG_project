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
      <ul class="navbar-nav ml-auto">

      <?php 
      include_once '../app/models/pagesModel.php';
      $pages = \App\Models\PagesModel\findAll($conn); 

      // Available VARIABLES: 
      // - $pages: ARRAY(ARRAY(id, titre, sousTitre, texte, titreMenu, image, tri))

      foreach($pages as $page):
      ?>

        <li class="nav-item">
          <a class="nav-link" href="page/<?php echo $page['id']; ?>/<?php echo \Core\Functions\slugify($page['titre']); ?>">
            <?php echo $page['titreMenu']; ?>
          </a>
        </li>

      <?php endforeach; ?>

      </ul>
    </div>
  </div>
</nav>