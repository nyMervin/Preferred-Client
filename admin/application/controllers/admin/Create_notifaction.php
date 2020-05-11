<?php 
class Create_notifaction extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'create_notifaction';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function notifitation_android($deviceToken,$message,$device_type)
    {


          
           if($device_type=="Android")
           {
            $url = "https://fcm.googleapis.com/fcm/send";
            $serverKey = 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4';
            $title = "Preferred Client App";
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
           }
           else
           {
             define( 'API_ACCESS_KEY', 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4' );
            $singleID = $deviceToken ;
            $fcmMsg = array(
                    'body' => $message,
                    'title' => "Preferred Client App",
                    'sound' => "default",
                    'color' => "#203E78"

                );
            $fcmFields = array(
                    'to' => $singleID,
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
            
            // return $response;
      // $this->load->view("android_notification/index",array("deviceToken_set"=>@$deviceToken,"message_set"=>@$message));
    }


    public function notifitation_not_for_android_all($UsersDeviceToken,$message){
        define( 'API_ACCESS_KEY', 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4' );
            $registrationIDs = $UsersDeviceToken;
                    $fcmMsg = array(
                    'body' => $message,
                    'title' => "Preferred Client App",
                    'sound' => "default",
                    'color' => "#203E78"
                );
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
                    // var_dump($result);
                    // return $result;
    }

    public function notifitation_android_all($UsersDeviceToken,$message)
    {

          
    	$url = "https://fcm.googleapis.com/fcm/send";
            $serverKey = 'AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4';
            $title = "Preferred Client App";
            $body = $message;
            $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
            $arrayToSend = array('registration_ids' => $UsersDeviceToken, 'data' => $notification,'priority'=>'high');
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
            // curl_exec($ch);

            curl_close($ch);

     // var_dump($response);


	        // echo $result;
    }
    // public function notifitation_android_allO($UsersDeviceToken,$notification)
    // {
    //     define('API_ACCESS_KEY','AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4');
	   //  $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
	   //  $token='f_JJgv7p64U:APA91bGUn-dkS1NtrK8qcypSMZ-UTIU8Tnuy3LnukD9z9Z-6KsZuQKE-znWY7-tBvWGPdi6rARMRoXEUwfw0-Zwae3FRPXSRCz5a9PhHT1ladK3AWGUQaKQGSezGaKm_3v4IF9l8Lj9A';

	   //  $notification = [
	   //          // 'title' =>'title',
	   //          // 'body' => 'body of message.',
	   //          'body' => $notification,
	   //          'icon' =>'myIcon', 
	   //          'sound' => 'mySound'
	   //      ];
	   //      $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

	   //      $fcmNotification = [
	   //          'registration_ids' => $UsersDeviceToken, //multple token array
	   //          // 'to'        => $token, //single token
	   //          'notification' => $notification,
	   //          'data' => $extraNotificationData
	   //      ];

	   //      $headers = [
	   //          'Authorization: key=' . API_ACCESS_KEY,
	   //          'Content-Type: application/json'
	   //      ];

	   //      $ch = curl_init();
	   //      curl_setopt($ch, CURLOPT_URL,$fcmUrl);
	   //      curl_setopt($ch, CURLOPT_POST, true);
	   //      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	   //      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	   //      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	   //      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
	   //      $result = curl_exec($ch);
	   //      curl_close($ch);


	   //      // echo $result;
    // }
    public function for_one()
    {
        $this->data['page']='for_one';
        $this->data['list'] = $this->admin_panel_model->get_user();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function for_all()
    {
        $this->data['page']='for_all';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function send_to_one()
    {
        $app_user = $this->input->post('app_user');
        $notifaction = $this->input->post('notifaction');
        $data = array(
          'send_to' => $app_user, 
          'type' => 'text', 
          'notification' => $notifaction, 
          'send_at' => date("Y-m-d h:i:s A")
      );
        $insert= $this->admin_panel_model->send_for_one($data);
        if($insert)
        {
        	$user = $this->admin_panel_model->get_user_by_client($app_user);
        	$send_notification = $this->notifitation_android($user['device_token'],$notifaction,$user['device_type']);
            $message='Notification Sent Successfully';
          $this->session->set_flashdata('success',$message); 
          // $lupdated_notification = $this->admin_panel_model->get_s_notification($app_user);
            // redirect("admin/create-notifaction-for-one");
            // echo json_encode($lupdated_notification);
        }
        else
        {
            $message='Failed To Send Notifiaction';
          $this->session->set_flashdata('failed',$message); 
            // redirect("admin/create-notifaction-for-one");
        }
    }

    public function send_to_all()
    {
        $app_user = $this->input->post('app_user');
        $notifaction = $this->input->post('notifaction');
        $data = array(
          'send_to' => $app_user, 
          'type' => 'text', 
          'notification' => $notifaction,
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A")
      );
        $insert= $this->admin_panel_model->send_for_one($data);
        if($insert)
        {
        	$user_for_android = $this->admin_panel_model->get_users_token_for_android();
            $user_not_for_android = $this->admin_panel_model->get_users_token_not_for_android();
        	// var_dump($user);
        	// var_dump($user[0]['device_token']);
        	$users_token_android = array();
        	for ($i=0; $i < count($user_for_android) ; $i++) { 
        		# code...
        		// $token = implode(",", $user[$i]['device_token']);
        		array_push($users_token_android,$user_for_android[$i]['device_token']);
        		// echo $user[$i]['device_token'];
			// echo "<br>";

        	}
        	
        	$send_notification = $this->notifitation_android_all($users_token_android,$notifaction);

            $users_token_not_for_android = array();
            for ($i=0; $i < count($user_not_for_android) ; $i++) { 
                # code...
                // $token = implode(",", $user[$i]['device_token']);
                array_push($users_token_not_for_android,$user_not_for_android[$i]['device_token']);
                // echo $user[$i]['device_token'];
            // echo "<br>";

            }
            $send_notification = $this->notifitation_not_for_android_all($users_token_not_for_android,$notifaction);

            $message='Notification Sent Successfully';
          $this->session->set_flashdata('success',$message); 
            redirect("admin/create-notifaction-for-all");
        }
        else
        {
            $message='Failed To Send Notifiaction';
          $this->session->set_flashdata('failed',$message); 
            redirect("admin/create-notifaction-for-all");
        }
    }
    

///////////////////////// End Mohit /////////////////



}
?>