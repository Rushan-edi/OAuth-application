<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("167975327203-v3kls1m75a0t29cqisjbho7tghetila5.apps.googleusercontent.com");
	$gClient->setClientSecret("5TTRLqCj9d5sNBbOx6czqgRe");
	$gClient->setRedirectUri("http://localhost/OAuth-application/googlecallback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
