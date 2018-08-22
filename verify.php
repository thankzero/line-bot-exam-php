<?php
$access_token = 'nCuy0Au7fRsFE+ltZTI7T75MlP+U74Jb1FouPFySMzOAmXxO75Bq6dKDdipyo4rhOgqrX+kvIQMlLgCcut9y692c5VRc17DVMVJqElbEQh6zyv/gJa0qfdkK60VzedFTL7tqKOivu6n+SZRGhoc75QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
