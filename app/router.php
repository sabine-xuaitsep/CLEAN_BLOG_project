<?php
/* 
  ./app/router.php
*/


// --------------------------------- AJAX ROUTES ---------------------------------

if(isset($_GET['more'])):
  // OLDERS POSTS ROUTE
  // PATTERN: ?more=offset
  // CTRL: postsController
  // ACTION: ajaxList
  include_once '../app/controllers/postsController.php';
  App\Controllers\PostsController\ajaxListAction($conn, $_GET['more']);

elseif(isset($_GET['edit'])):
  // EDIT POST ROUTE
  // PATTERN: ?edit=postID&field=nameOfField&data=data
  // CTRL: postsController
  // ACTION: ajaxEdit
  include_once '../app/controllers/postsController.php';
  App\Controllers\PostsController\ajaxEditAction($conn, $_GET['edit'], $_GET['field'], $_GET['data']);



// --------------------------------- STANDARDS ROUTES ---------------------------------

elseif(isset($_GET['pageID'])):
  // PAGE ROUTE
  // PATTERN: page/id/slug => ?pageID=x
  // CTRL: pagesController
  // ACTION: show
  include_once '../app/controllers/pagesController.php';
  App\Controllers\PagesController\showAction($conn, $_GET['pageID']);

elseif(isset($_GET['postID'])):
  // POST ROUTE
  // PATTERN: post/id/slug => ?postID=x
  // CTRL: postsController
  // ACTION: show
  include_once '../app/controllers/postsController.php';
  App\Controllers\PostsController\showAction($conn, $_GET['postID']);

else:
  // DEFAULT ROUTE
  // PATTERN: /
  // CTRL: pagesController
  // ACTION: show
  include_once '../app/controllers/pagesController.php';
  App\Controllers\PagesController\showAction($conn, 1);

endif;
