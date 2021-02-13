<?php

//start session on web page

  $conn = mysqli_connect("localhost","root","","socialpedia");//Create Connection
   
//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('435137352934-h8uggo2p6felhkbtkh8hvuulo364b0pu.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('h8bTD_IdD492PJ6uqy3GjQRe');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/SocialPedia/user/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 