<?php
/* 
  ./app/controllers/pagesController.php
*/

namespace App\Controllers\PagesController;
use \App\Models\PagesModel;


/**
 * showAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction(\PDO $conn, int $id) {
  // asking pageDetails to pagesModel
  include_once '../app/models/pagesModel.php';
  $page = PagesModel\findOne($conn, $id);

  // load $title & page/show in $content
  GLOBAL $content, $title;
  $title = $page['titre'];
  ob_start();
    include '../app/views/pages/show.php';
  $content = ob_get_clean();
}