<?php 
class Balance extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'balance';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function notifitation_android($deviceToken,$message)
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
      // $this->load->view("android_notification/index",array("deviceToken_set"=>@$deviceToken,"message_set"=>@$message));
    }
    public function index()
    {
        $this->data['page']='index';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_balance_request($branch_code);
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
        $send_banance = $this->branch_admin_panel_model->send_user_account_balance($data);
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
            $user = $this->branch_admin_panel_model->get_user_by_client($client_id);
            $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message);
            $message='Success!!';
          $this->session->set_flashdata('success',$message); 
            redirect("branch-admin/balance");
        }
        else
        {
            $message='Failed !!';
          $this->session->set_flashdata('failed',$message); 
            redirect("branch-admin/balance");
        }
    }
    

///////////////////////// End Mohit /////////////////



}
?>