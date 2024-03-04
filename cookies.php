<?php

// Get the raw HTTP cookie string
$rawCookies = $_SERVER['HTTP_COOKIE'];

// Split the cookie string into individual cookies
$cookiePairs = explode('; ', $rawCookies);

// Initialize an array to store decoded cookies
$decodedCookies = [];

// Iterate through each cookie pair and decode the name and value
foreach ($cookiePairs as $cookiePair) {
    // Split the cookie pair into name and value
    list($name, $value) = explode('=', $cookiePair, 2);

    // URL-decode the name and value
    $decodedName = urldecode($name);
    $decodedValue = urldecode($value);

    // Store the decoded cookie in the array
    $decodedCookies[$decodedName] = $decodedValue;
}

// Output the decoded cookies
print_r($decodedCookies);

?>