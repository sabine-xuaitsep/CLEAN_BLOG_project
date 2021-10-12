<?php
/* 
  ./app/views/posts/show.php

  Available VARIABLES: 
  - $post: ARRAY(id, titre, sousTitre, datePublication, texte, user, categorie_id)
*/
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/post-bg.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-heading">
          <h1 class="editableField" data-editionField="input" data-editedField="titre"><?php echo $post['titre'] ; ?></h1>
          <h2 class="subheading editableField" data-editionField="input" data-editedField="sousTitre"><?php echo $post['sousTitre'] ; ?></h2>
          <span class="meta">Posted on <?php echo Core\Functions\datify($post['datePublication']) ; ?></span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Textes -->
<article id="postDetails" data-id="<?php echo $post['id'] ; ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- EDIT -->
        <div class="clearfix">
          <a class="btn btn-secondary" href="#" id="editPost">Edit Post &rarr;</a>
          <a class="btn btn-secondary" href="#" id="deletePost">Delete Post &rarr;</a>
        </div>


        <!-- POST DETAILS -->
        <p class="editableField" data-editionField="textarea" data-editedField="texte">
          <?php echo $post['texte'] ; ?>
        </p>
      </div>
    </div>
  </div>
</article>