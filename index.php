<?php
require "vendor/autoload.php";
$access_token = 'QIXKaN9lB/lJ178xbRQRfqo6KuEUr1V0oz/qtTl+OaxHLiC1letsjTvPNffB1RSHw/vHfgfXVOoPCoIx325o+ixa8dnQ7y7bh/XxmVnNkO3mFfQ+ax1VvKY7aDKe0V78tsPWwTNj/Pa4NZOkvWJ6LwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '51d41de8e4556e569c8adb44908b655b';
$idPush = 'aqueous-chamber-31029.herokuapp.com'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
