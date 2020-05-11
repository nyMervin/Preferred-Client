<?php 
class Create_notifaction extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'create_notifaction';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function notifitation_android_one($deviceToken,$message)
    {
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

            // $response = curl_exec($ch);
            curl_exec($ch);

            curl_close($ch);

          // echo $result;
    }


    // public function notifitation_android_all($UsersDeviceToken,$notification)
    // {
    //     define('API_ACCESS_KEY','AIzaSyDu3G1ul4ZvS9D5kXaEJM2poWxO8cZFOl4');
    //   $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
    //   $token='f_JJgv7p64U:APA91bGUn-dkS1NtrK8qcypSMZ-UTIU8Tnuy3LnukD9z9Z-6KsZuQKE-znWY7-tBvWGPdi6rARMRoXEUwfw0-Zwae3FRPXSRCz5a9PhHT1ladK3AWGUQaKQGSezGaKm_3v4IF9l8Lj9A';

    //   $notification = [
    //           // 'title' =>'title',
    //           // 'body' => 'body of message.',
    //           'body' => $notification,
    //           'icon' =>'myIcon', 
    //           'sound' => 'mySound'
    //       ];
    //       $extraNotificationData = ["message" => $notification,"moredata" =>'dd'];

    //       $fcmNotification = [
    //           'registration_ids' => $UsersDeviceToken, //multple token array
    //           // 'to'        => $token, //single token
    //           'notification' => $notification,
    //           'data' => $extraNotificationData
    //       ];

    //       $headers = [
    //           'Authorization: key=' . API_ACCESS_KEY,
    //           'Content-Type: application/json'
    //       ];

    //       $ch = curl_init();
    //       curl_setopt($ch, CURLOPT_URL,$fcmUrl);
    //       curl_setopt($ch, CURLOPT_POST, true);
    //       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
    //       $result = curl_exec($ch);
    //       curl_close($ch);


    //       // echo $result;
    // }
    public function for_one()
    {
        $this->data['page']='for_one';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_user($branch_code);
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
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A")
      );
        $insert= $this->branch_admin_panel_model->send_for_one($data);
        if($insert)
        {
          $user = $this->branch_admin_panel_model->get_user_by_id($app_user);
          $this->notifitation_android_one($user['device_token'],$notifaction);
            $message='Notification Sent Successfully';
          $this->session->set_flashdata('success',$message); 
            redirect("branch-admin/create-notification-for-one");
        }
        else
        {
            $message='Failed To Send Notification';
          $this->session->set_flashdata('failed',$message); 
            redirect("branch-admin/create-notification-for-one");
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
        $insert= $this->branch_admin_panel_model->send_for_one($data);
        if($insert)
        {
          $branch_code = $this->branch_admin_panel_model->branch_code();
          $users = $this->branch_admin_panel_model->get_user($branch_code);
          $branch_users_token = array();
          for ($i=0; $i < count($users) ; $i++) { 
            array_push($branch_users_token,$users[$i]['device_token']);
          }
          $this->notifitation_android_all($branch_users_token,$notifaction);
          // var_dump($users[0]['device_token']);
          // var_dump($branch_users_token);
            $message='Notification Sent Successfully';
          $this->session->set_flashdata('success',$message); 
            redirect("branch-admin/create-notification-for-all");
        }
        else
        {
            $message='Failed To Send Notification';
          $this->session->set_flashdata('failed',$message); 
            redirect("branch-admin/create-notification-for-all");
        }
    }

///////////////////////// End Mohit /////////////////



}
?>