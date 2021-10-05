<?php
/* 
  ./app/views/posts/index.php

  Available VARIABLES: 
  - $posts: ARRAY(ARRAY(id, titre, sousTitre, datePublication, texte, user, categorie_id))
*/
?>

<!-- ADD A POST -->
<div class="clearfix">
  <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
</div>

<!-- POSTS LIST -->
<div id="postsList">
  <?php include '../app/views/posts/list.php'; ?>
</div>

<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-secondary float-right" id="olderPosts" href="#">Older Posts &rarr;</a>
</div>