<?php 
class Balance extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'balance';
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
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_balance_request();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
     public function send_account_balance()
    {
        $id = $this->input->post('id');
        $client_id = $this->input->post('client_id');
        $us_balance = $this->input->post('us_balance');
        $peso_balance = $this->input->post('peso_balance');
        $peso_balance2 = $this->input->post('peso_balance2');

        $data  = array(
            'client_id' => $client_id, 
            'us_balance' => $us_balance, 
            'peso_balance' => $peso_balance,
            'peso_balance2' => $peso_balance2,
            'completed_by' => $this->session->userdata['Admid'],
            'completed_on' => date("Y-m-d h:i:s A")
        );
        $send_banance = $this->admin_panel_model->send_user_account_balance($data);
        if($send_banance)
        {
            $this->db->query("UPDATE `balances_request` SET `status` = '1' WHERE `balances_request`.`id` = '".$id."'");
            $notifcation_message = 'Your Account Balance Are Dollar Account $ '.$us_balance.' Peso Account 1  ₱'.$peso_balance.' Peso Account 2  ₱'.$peso_balance2;
            $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);
            $user = $this->admin_panel_model->get_user_by_client($client_id);
            $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message,$user['device_type']);
            $message='Send Successfull.';
            $this->session->set_flashdata('success',$message); 
            redirect("admin/balance");
        }
        else
        {
            $message='Failed To Send !';
          $this->session->set_flashdata('failed',$message); 
            redirect("admin/balance");
        }
    }
    

///////////////////////// End Mohit /////////////////



}
?>