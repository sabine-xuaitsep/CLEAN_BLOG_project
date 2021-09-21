<?php
/* 
  ./app/views/posts/index.php

  Available VARIABLES: 
  - $posts: ARRAY(ARRAY(id, titre, sousTitre, datePublication, texte, user categorie_id))
*/
?>

<!-- ADD A POST -->
<div class="clearfix">
  <a class="btn btn-secondary float-left" href="#">Add Post &rarr;</a>
</div>

<!-- POSTS LIST -->
<?php foreach($posts as $post): ?>
  <div class="post-preview">
    <a href="#">
      <h2 class="post-title">
      <?php echo $post['titre'] ; ?>
      </h2>
      <h3 class="post-subtitle">
        <?php echo $post['sousTitre'] ; ?>
      </h3>
    </a>
    <p class="post-meta">Posted on September 24, 2017</p>
  </div>
  <hr>
<?php endforeach ; ?>
<!-- Pager -->
<div class="clearfix">
  <a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
</div>