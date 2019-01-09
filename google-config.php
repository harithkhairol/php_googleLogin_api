<?php

session_start();
require_once "GoogleAPI/vendor/autoload.php";

$gClient = new Google_Client();
$gClient->setClientId("739291216997-kt32grltkch5du6kkmhe6j7mj28788j1.apps.googleusercontent.com");
$gClient->setClientSecret("g5w7mReLo6Rbdmpt-WQBsdiG");
$gClient->setApplicationName("Myezgo Login Tutorial");
$gClient->setRedirectUri("http://localhost/google_study/google-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");


?>