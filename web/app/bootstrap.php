<?php

defined('APP') or die();

session_start();

if (!file_exists(APP . '/client_secrets.json')) {
    die('Missing "client_secrets.json" file. Read about this in README.');
}

$client_secrets = file_get_contents(APP . '/client_secrets.json');
$client_secrets = json_decode($client_secrets);

if (json_last_error != JSON_ERROR_NONE) {
    die(json_last_error_msg());
}

define('CLIENT_ID', $client_secrets->web->client_id);

if (empty($_POST['view_id']) && empty($_SESSION['view_id']) && $view_id != -1) {
    die('Missing view ID.');
}

if (!empty($_POST['view_id'])) {
    $_SESSION['view_id'] = $_POST['view_id'];
    $view_id = $_SESSION['view_id'];
} elseif ($view_id == -1) {
    $view_id = '';
}

define('VIEW_ID', $view_id);

// Load the Google API PHP Client Library.
require_once APP . '/vendor/autoload.php';
