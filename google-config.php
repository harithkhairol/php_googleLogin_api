<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId("YOUR CLIENT ID");
$gClient->setClientSecret("YOUR CLIENT SECRET");
$gClient->setApplicationName("Myezgo Login Tutorial");
$gClient->setRedirectUri("http://localhost/google_study/google-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


?>
