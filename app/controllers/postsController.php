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

  // add script for AJAX request
  GLOBAL $scripts;
    $scripts .= '<script src="js/posts/index.js"></script>';

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
  //  and add script for AJAX request
  GLOBAL $content, $title, $scripts;
  $title = $post['titre'];
  $scripts .= '<script src="js/posts/show.js"></script>';
  ob_start();
    include '../app/views/posts/show.php';
  $content = ob_get_clean();
}


/**
 * ajaxListAction
 *
 * @param \PDO $conn
 * @param integer $offset
 * @return void
 */
function ajaxListAction(\PDO $conn, int $offset) {
  // asking following posts to postsModel
  include_once '../app/models/postsModel.php';
  $posts = PostsModel\findAll($conn, 10, $offset);

  // load posts/index directly
  include '../app/views/posts/list.php';
}


/**
 * ajaxEditAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @param string $field
 * @param string $data
 * @return void
 */
function ajaxEditAction(\PDO $conn, int $id, string $field, string $data) {
  // edit post 
  include_once '../app/models/postsModel.php';
  PostsModel\updateOne($conn, $id, $field, $data);
}