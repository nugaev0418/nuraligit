<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

use vendor\frame\App;


require_once'vendor/autoload.php';
require_once("autoload.php") ;


$app = new App();
$app->run();