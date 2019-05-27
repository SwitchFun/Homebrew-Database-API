<?php
//Import SQL crap
include "meekrodb.2.3.class.php";
require_once 'meekrodb.2.3.class.php';
//Define database information
DB::$user = '';
DB::$password = '';
DB::$dbName = '';
//Grab APP Keyword
$appname = $_GET['app'];
$query = DB::queryFirstRow("SELECT APP_URL, APP_AUTHOR from `app` where `APP_TITLE` = %s", $appname);
if(is_null($query)) {
    # we did not find any results at all.
    die(json_encode(['APP_URL' => 'Result not found!']));
}

$TITLE = $query['APP_TITLE'];
$VERSION = $query['APP_VERSION'];
$AUTHOR = $query['APP_AUTHOR'];
$URL = $query['APP_URL'];
$finishedDataToOutput = JSON_Encode(['APP_URL' => "$URL", 'APP_AUTHOR' => "$AUTHOR"],JSON_UNESCAPED_SLASHES);
echo $finishedDataToOutput;

?>
