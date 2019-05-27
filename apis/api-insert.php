<?php
$title = $_GET['TITLE'];
$url = $_GET['URL'];
$ver = "Public";
$author = $_GET['Author'];
//Import SQL crap
include "meekrodb.2.3.class.php";
require_once 'meekrodb.2.3.class.php';
//Define database information
DB::$user = '';
DB::$password = '';
DB::$dbName = '';
//Grab APP Keyword
$appname = $_GET['app'];
DB::insert('app', array(
  'APP_TITLE' => $title,
  'APP_VERSION' => "Public",
  'APP_AUTHOR' => $author,
  'APP_URL' => $url
));

$TITLE = $query['APP_TITLE'];
$VERSION = $query['APP_VERSION'];
$AUTHOR = $query['APP_AUTHOR'];
$URL = $query['APP_URL'];
$finishedDataToOutput = JSON_Encode(['APP_URL' => "$URL"],JSON_UNESCAPED_SLASHES);
echo $finishedDataToOutput;

?>
