<?php

//Accounts Controller


// Get the database connection file
require_once '../library/connections.php';
// Get the PHP Motors model for use as needed
require_once '../model/main-model.php';
require_once '../library/functions.php';



// Get the array of classifications
$classifications = getClassifications();

//var_dump($classifications);
	//exit;

// Build a navigation bar using the $classifications array
$navList = buildNav($classifications);


$action = filter_input(INPUT_GET, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_POST, 'action');
 }
//existing control structure
  switch ($action) {
  case 'login':
    include $_SERVER['DOCUMENT_ROOT'] . '../phpmotors/view/login.php';
      break;
  case 'registration':
    include $_SERVER['DOCUMENT_ROOT'] . '../phpmotors/view/registration.php';
      break;
  default:
  break;
 }

?>