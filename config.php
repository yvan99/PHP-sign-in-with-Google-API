<?php 
session_start();
require_once 'googleApi/vendor/autoload.php';
// google config
$gClient = new Google_Client();
$gClient->setClientId(""); // ENTER YOUR oAuth client ID
$gClient->setClientSecret("");// ENTER YOUR oAuth client Secret
$gClient->setApplicationName("Google Login API");
$gClient->setRedirectUri("https://localhost/projects/googlelogin/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>