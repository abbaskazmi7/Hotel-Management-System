<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'assets/lib/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('97109209956-j1i0q8113n8sgj1s3no6c2oivkr33km5.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/hotel/history.php');

// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->addScope('openid');

?>