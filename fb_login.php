<?php

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;

require 'vendor/autoload.php';

session_start();

$appId = '461948394748302';
$appSecret = 'a628f9bd778eec1fd6cca14a4bc76ed';

FacebookSession::setDefaultApplication($appId, $appSecret);
$helper = new FacebookRedirectLoginHelper('http://fat.io/gui/index.php');

if(isset($_SESSION) && isset($_SESSION['fb_token'])){
    $session = new FacebookSession($_SESSION['fb_token']);
}else{
    $session = $helper->getSessionFromRedirect();
}

if($session){
    $_SESSION['fb_token'] = $session->gettoken();
}else{
    echo '<a href="<?= $helper->getLoginUrl(); ?>">Log in with Facebook</a>';
}

$session = $helper->getSessionFromRedirect();
$fb_token = $session->getToken();

$_SESSION['fb_token'] = $sessoin->getToken();

?>

