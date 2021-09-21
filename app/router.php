<?php
/* 
  ./app/router.php
*/

if(isset($_GET['pageID'])):
  // PAGE ROUTE
  // PATTERN: page/id/slug => ?pageID=x
  // CTRL: pagesController
  // ACTION: show
  include_once '../app/controllers/pagesController.php';
  App\Controllers\PagesController\showAction($conn, $_GET['pageID']);

else:
  // DEFAULT ROUTE
  // PATTERN: /
  // CTRL: pagesController
  // ACTION: show
  include_once '../app/controllers/pagesController.php';
  App\Controllers\PagesController\showAction($conn, 1);

endif;
