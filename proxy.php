<?php
header('Content-Type: application/json');
$url = "https://suitmedia-backend.suitdev.com/api/ideas?" . $_SERVER['QUERY_STRING'];
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'Content-Type: application/json'
));
$result = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

if ($result === false) {
    echo json_encode(['error' => 'Curl error']);
} else {
    header('X-Proxy-Status: ' . $info['http_code']);
    echo $result;
} 