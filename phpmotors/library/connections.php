<?php
/*
* proxy connection to the phpmyadmin db.
*/

function phpmotorsConnect()
{
$server = 'localhost';
$dbname = 'phpmotors';
$username = 'iClient';
$password = '*byAX6iD64kBWlI-';
$dsn = "mysql:host=$server;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try{
    $link = new PDO($dsn, $username, $password, $options);
    //if(is_object($link)){
        //echo 'It worked';
    //}
    return $link;
} catch(PDOException $e){
    //echo 'it didnt' . $e->getMessage();
    header("Location: /phpmotors/view/500.php");
    exit;
}
}
//phpmotorsConnect();

