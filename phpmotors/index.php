<?php

//Main controller 


// Get the database connection file
require_once 'library/connections.php';
// Get the PHP Motors model for use as needed
require_once 'model/main-model.php';
require_once 'library/functions.php';


// Get the array of classifications
$classifications = getClassifications();

//var_dump($classifications);
	//exit;

// Build a navigation bar using the $classifications array
$navList = buildNav($classifications);
//return $navList;




$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

 switch ($action) {
  case 'something':

      break;

  default:
      include 'view/home.php';
      break;
}

//   switch ($action){
//   case 'login':
//    include 'view/login.php';
//    break;
//    case 'register':
//    include 'view/registration.php';
//   default:
//    include 'view/home.php';
//  }

?>