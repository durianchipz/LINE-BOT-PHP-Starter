<?php
$access_token = 'access_token=kAFEeH9a6hpr8nbX9DKJXVdcmYM/t1MnMY5/oondsuIZr1RVPTqkfistooX+urwxl03M7eISaakYbsDFah84YYu+B2bxA3stccnqFjy8L0wYNozGQMWvpPJpEemztKySWxPC/OfRZJ79J3RfHgUZrAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/verify';

//$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$access_token);

$result = curl_exec($ch);
curl_close($ch);

echo $result;
