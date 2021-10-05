<?php 
/* 
  ./public/index.php
*/

// loading initialization file
require_once '../core/init.php';

// loading router
require_once '../app/router.php';

// AJAX check
if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
  // load template if no AJAX request
  require_once "../app/views/templates/index.php";
}

// closing connection to DB
require_once '../core/close.php';