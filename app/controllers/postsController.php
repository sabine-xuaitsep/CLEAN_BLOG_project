<?php
/* 
  ./app/controllers/postsController.php
*/

namespace App\Controllers\PostsController;
use App\Models\PostsModel;


/**
 * indexAction
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction(\PDO $conn) {
  // asking all posts to postsModel
  include_once '../app/models/postsModel.php';
  $posts = PostsModel\findAll($conn);

  // load posts/index directly
  include '../app/views/posts/index.php';
}


/**
 * showAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction(\PDO $conn, int $id) {
  // asking one post to postsModel
  include_once '../app/models/postsModel.php';
  $post = PostsModel\findOne($conn, $id);

  // load $title & page/show in $content
  GLOBAL $content, $title;
  $title = $post['titre'];
  ob_start();
    include '../app/views/posts/show.php';
  $content = ob_get_clean();
}