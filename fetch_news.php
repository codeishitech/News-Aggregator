<?php
require_once("config.php");

$category = $_GET['category'] ?? 'technology';

$url = "https://newsapi.org/v2/everything?q=" 
       . $category . 
       "&sortBy=publishedAt&language=en&apiKey=" 
       . API_KEY;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: WebTechProject/1.0'
]);
$response = curl_exec($ch);
header('Content-Type: application/json');
echo $response;
curl_close($ch);
?>