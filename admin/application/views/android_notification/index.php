<?php

$message = $message_set;
$deviceToken = $deviceToken_set;

$url = "https://fcm.googleapis.com/fcm/send";
$serverKey = 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4';
$title = "ControlPlus App";
$body = $message;
$notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
$arrayToSend = array('to' => $deviceToken, 'data' => $notification,'priority'=>'high');
$json = json_encode($arrayToSend);
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: key='. $serverKey;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);

// $response = curl_exec($ch);
curl_exec($ch);

curl_close($ch);

// return $response;
?>