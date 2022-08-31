<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'assets/lib/vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('97109209956-sajsvbb1nrk664b6ub0hrtdok1q38dbk.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/hotel/google.php');

// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->addScope('openid');

?>