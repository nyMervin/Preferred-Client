  <html>
        <head>
            <title>ControlPlus Notification Center</title>
        </head>
        <body>
            <center>
                <br>
                <font size="10" style="bold">ControlPlus Notification Center</font>
                <br> <br> <br> <br> <br>
                <Table class= "b">
                    <tr>
                        <td>
                            <form method = 'POST' action = '?notifyHealth=1'>
                                <div>
                                <input class ='main_button' type = 'submit' value = 'Send Notification'>
                                </div>
                            </form>
                        </td>
                    </tr>

                </Table>
            </center>
        </body>
    </html>



    <?php

        function sendPushNotification() {

            define( 'API_ACCESS_KEY', 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4' );

// generated via the cordova phonegap-plugin-push using "senderID" (found in FCM App Console)
// this was generated from my phone and outputted via a console.log() in the function that calls the plugin
// my phone, using my FCM senderID, to generate the following registrationId
//$singleID = 'cZkUtqhW1sI:APA91bFE8vKCwKhxsHnnIxSfz_tBsTSa6mjV40Z2HNJNXWm4q8955gyYiClIk4mcPRbrw2N9HANUbrUIzBiBOPwYs_ii7E2D4xQBdYYqQF8Ho6CpdhAX3Yv4yzuyacwTqoFg3wAyxbfQ' ;
$registrationIDs = array(
     'cZkUtqhW1sI:APA91bFE8vKCwKhxsHnnIxSfz_tBsTSa6mjV40Z2HNJNXWm4q8955gyYiClIk4mcPRbrw2N9HANUbrUIzBiBOPwYs_ii7E2D4xQBdYYqQF8Ho6CpdhAX3Yv4yzuyacwTqoFg3wAyxbfQ',
     ''
//     'eEvFbrtfRMA:APA91bFoT2XFPeM5bLQdsa8-HpVbOIllzgITD8gL9wohZBg9U.............mNYTUewd8pjBtoywd'
) ;

// prep the bundle
// to see all the options for FCM to/notification payload:
// https://firebase.google.com/docs/cloud-messaging/http-server-ref#notification-payload-support

// 'vibrate' available in GCM, but not in FCM
$fcmMsg = array(
    'body' => 'here is a message. message',
    'title' => 'This is title #1',
    'sound' => "default",
        'color' => "#203E78"
);
// I haven't figured 'color' out yet.
// On one phone 'color' was the background color behind the actual app icon.  (ie Samsung Galaxy S5)
// On another phone, it was the color of the app icon. (ie: LG K20 Plush)

// 'to' => $singleID ;  // expecting a single ID
// 'registration_ids' => $registrationIDs ;  // expects an array of ids
// 'priority' => 'high' ; // options are normal and high, if not set, defaults to high.
$fcmFields = array(
    'registration_ids' => $registrationIDs,
        'priority' => 'high',
    'notification' => $fcmMsg
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

        }

        if(!empty($_GET['notifyHealth'])) { 

            sendPushNotification();

        }
    ?>
