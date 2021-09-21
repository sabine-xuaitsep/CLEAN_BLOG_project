<?php
/* 
  ./app/router.php
*/


// DEFAULT ROUTE
// PATTERN: /
// CTRL: pagesController
// ACTION: show
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\showAction($conn, 1);
