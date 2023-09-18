<?php

include_once '../api.php';

$apiURL = "http://18.223.162.12/php-intro-conn-aws/select.php";

// Hacer una petición GET
$response = makeHttpRequest($apiURL);

echo $response;
