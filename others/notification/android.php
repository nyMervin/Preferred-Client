<?php
$url = "https://fcm.googleapis.com/fcm/send";
            $serverKey = 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4';
            $title = "Preferred Client App";
            $deviceToken = 'dRxujxL7-Jk:APA91bEQH0s-ne3GpG4Fd8pnQzkypvP_cd-0zvviurosQ3xeVxMdlpWNkJzNpm8M3vbf28AeYiXHQqFTXfH_HE_Jcekhon8hgS38QvRYXdxhdnjJS_7Gy6wCiixIFyIBQ6bkEgKbaUkl';
            $body = 'Android notification Test!!';
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

            $response = curl_exec($ch);
            curl_exec($ch);

            curl_close($ch);
?>