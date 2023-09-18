<?php

include_once '../api.php';

$apiURL = "http://52.90.138.66/php-intro-conn-aws/connect-api.php";

// Hacer una petición GET
$response = makeHttpRequest($apiURL);

echo $response;
