<?php

define('APP', dirname(__DIR__) . '/app');

require_once APP . '/bootstrap.php';

// Create the client object and set the authorization configuration
// from the client_secrets.json you downloaded from the Developers Console.
$client = new Google_Client();
$client->setAuthConfig(APP . '/client_secrets.json');
$client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
$client->addScope(Google_Service_Analytics::ANALYTICS_READONLY);

// Handle authorization flow from the server.
if (! isset($_GET['code'])) {
    $auth_url = $client->createAuthUrl();

    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/';

    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
