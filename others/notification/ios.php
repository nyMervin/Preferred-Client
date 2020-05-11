<?php
define( 'API_ACCESS_KEY', 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4' );
            $singleID = $deviceToken ;
            $fcmMsg = array(
                    'body' => $message,
                    'title' => "Preferred Client App",
                    'sound' => "default",
                    'color' => "#203E78"

                );
            $fcmFields = array(
                    // 'to' => $singleID,
                    'to' => 'dhl3e1Iydmo:APA91bGQILb5ggarDOAz79TNWQHqeRnQn4PlhMzwCI_gP6L55HDwhFF0ISaw6rfFAs8Kopc7nqEEbFwJ6RKqhepZDlCkVkzgz_ymPfzahh3N6TujyoULj1W5IaiGj220hy1QxcUSdUR-',
                    'priority' => 'high',
                    'notification' => 'Ios notification Test!!'
                );

                    $headers = array(
                    'Authorization: key=' . API_ACCESS_KEY,
                    'Content-Type: application/json'
                    );
                    $ch = curl_init();
                    curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
                    curl_setopt( $ch,CURLOPT_POST, true );
                    curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                    curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
                    curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
                    curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
                    $result = curl_exec($ch );
                    curl_close( $ch );
                    return $result;
?>