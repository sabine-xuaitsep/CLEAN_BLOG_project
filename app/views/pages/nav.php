<?php
/* 
  ./app/views/pages/nav.php

  Available VARIABLES: 
  - $pages: ARRAY(ARRAY(id, titre, sousTitre, texte, titreMenu, image, tri))
*/
?>

<ul class="navbar-nav ml-auto">

  <?php foreach($pages as $page): ?>

    <li class="nav-item">
      <a class="nav-link" href="page/<?php echo $page['id']; ?>/<?php echo Core\Functions\slugify($page['titre']); ?>">
        <?php echo $page['titreMenu']; ?>
      </a>
    </li>

  <?php endforeach; ?>

</ul>