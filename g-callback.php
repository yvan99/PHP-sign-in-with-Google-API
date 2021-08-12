<?php 
require_once 'config.php';
if(isset($_GET['code'])){
    // create a token
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    // store the token to the session
    $_SESSION['access_token']=$token;
}
elseif (isset($_GET['access_token'])) {
    # If the token exists
    $token = $gClient->setAccessToken(($_SESSION['access_token']));
}
else{
    header('location:index.php');
    exit();   
}
// get data from authorised person
$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();
$_SESSION['id']         = $userData['id'];
$_SESSION['email']      = $userData['email'];
$_SESSION['gender']     = $userData['gender'];
$_SESSION['picture']    = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName']  = $userData['givenName'];
header('location:index.php');
exit();
// echo "<pre>";
// var_dump($userData);
