<?php
header('Content-Type: application/json; charset=utf-8');

$base = "https://api3.binance.com";
$endpoint = "/api/v3/ticker/price";

$request = curl_init($base . $endpoint);

curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($request);
curl_close($request);

echo $response;

?>