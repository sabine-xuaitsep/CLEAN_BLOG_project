<?php
/* 
  ./app/views/posts/list.php

  Available VARIABLES from ./app/views/posts/index.php: 
  - $posts: ARRAY(ARRAY(id, titre, sousTitre, datePublication, texte, user, categorie_id))
*/
?>

<?php foreach($posts as $post): ?>
  <div class="post-preview">
    <a href="post/<?php echo $post['id']; ?>/<?php echo Core\Functions\slugify($post['titre']); ?>">
      <h2 class="post-title">
      <?php echo $post['titre'] ; ?>
      </h2>
      <h3 class="post-subtitle">
        <?php echo $post['sousTitre'] ; ?>
      </h3>
    </a>
    <p class="post-meta">Posted on <?php echo Core\Functions\datify($post['datePublication']) ; ?></p>
  </div>
  <hr>
<?php endforeach ; ?>