<?php
require "vendor/autoload.php";
$access_token = 'nCuy0Au7fRsFE+ltZTI7T75MlP+U74Jb1FouPFySMzOAmXxO75Bq6dKDdipyo4rhOgqrX+kvIQMlLgCcut9y692c5VRc17DVMVJqElbEQh6zyv/gJa0qfdkK60VzedFTL7tqKOivu6n+SZRGhoc75QdB04t89/1O/w1cDnyilFU=';
$channelSecret = '82617be1a3978f7a8c802f0844f3124c';
$idPush = 'U543d63423fd6d04703170a5d2563a3d5'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
