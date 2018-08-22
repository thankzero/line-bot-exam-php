<?php
require "vendor/autoload.php";
$access_token = 'lODu4rO6kCgbIcPaV+f1yQfQpHbR3nHIi1nx3Mn/+g9meFbgvAexyZNTaAb52albOgqrX+kvIQMlLgCcut9y692c5VRc17DVMVJqElbEQh6YaBLvexNoaQG2o97Pju2iPhqhc80U79t8DC/Z0xBibwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '82617be1a3978f7a8c802f0844f3124c';
$idPush = '@bum5144s'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
