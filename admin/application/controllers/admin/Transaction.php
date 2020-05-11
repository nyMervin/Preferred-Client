<?php 
class Transaction extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'blank_module';
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

    public function set_buy_dollar_transaction()
    {
        $type = "Buy Dollar"; 
        $id = $this->input->post('id');
        $client_id = $this->input->post('client_id');
        $debit_peso = $this->input->post('debit_peso');
        $credit_dollar = $this->input->post('credit_dollar');
        $transaction_number = $this->input->post('transaction_number');
        $completed_on = date("Y-m-d h:i:s A");
        $data = array(
          'client_id' => $client_id, 
          'type' => $type, 
          'debit_amount' => $debit_peso, 
          'credit_amount' => $credit_dollar, 
          'transaction_number' => $transaction_number,
          'completed_by' => $this->session->userdata['Admid'], 
          'completed_on' => $completed_on 
      );
        $insert= $this->admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE buy_dollar_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Transaction to buy $'.$credit_dollar.' is completed Bought $'.$credit_dollar.' Debited ₱'.$debit_peso.' Credited $'.$credit_dollar.' .Thank you for your order';
          $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);

            $s_notification = $this->admin_panel_model->get_s_notification($client_id);

            $message='Success!!';
          $this->session->set_flashdata('success',$message); 
            // redirect("admin/buy-dollar");
          $user = $this->admin_panel_model->get_user_by_client($client_id);
          $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message,$user['device_type']);
          // echo json_encode($s_notification);
          // var_dump($client_id);
        }
        else
        {
            $message='Failed !!';
          $this->session->set_flashdata('failed',$message); 
            // redirect("admin/buy-dollar");
        }
    }
    public function set_sell_dollar_transaction()
    {
         date_default_timezone_set('Asia/Kolkata');
        $type = "Sell Dollar"; 
        $id = $this->input->post('id');
        $client_id = $this->input->post('client_id');
        $credit_peso = $this->input->post('credit_peso');
        $debit_dollar = $this->input->post('debit_dollar');
        $transaction_number = $this->input->post('transaction_number');
        $completed_on = date("Y-m-d h:i:s A");
        $data = array(
          'client_id' => $client_id, 
          'type' => $type, 
          'debit_amount' => $debit_dollar, 
          'credit_amount' => $credit_peso, 
          'transaction_number' => $transaction_number,
          'completed_by' => $this->session->userdata['Admid'],
          'completed_on' => $completed_on 
      );
        $insert= $this->admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE sell_dollar_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Transaction to Sell $'.$debit_dollar.' is completed Bought ₱'.$credit_peso.' Debited $'.$debit_dollar.' Credited ₱'.$credit_peso.' .Thank you for your order';
            $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);
            // var_dump($this->db->last_query());
            $message='Success!!';
            $s_notification = $this->admin_panel_model->get_s_notification($client_id);
          $this->session->set_flashdata('success',$message); 
            // redirect("admin/sell-dollar");
          // echo json_encode($s_notification);
           $user = $this->admin_panel_model->get_user_by_client($client_id);
          $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message,$user['device_type']);
        }
        else
        {
            $message='Failed !!';
          $this->session->set_flashdata('failed',$message); 
            // redirect("admin/sell-dollar");
        }
    }

    public function set_time_deposit_transaction()
    {
        $type = "Time Deposit"; 
        $id = $this->input->post('id');
        $client_id = $this->input->post('client_id');
        $rate = $this->input->post('rate');
        $debit_peso = $this->input->post('debit_peso');
        $transaction_number = $this->input->post('transaction_number');
        $completed_on = date("Y-m-d h:i:s A");
        $data = array(
          'client_id' => $client_id, 
          'type' => $type, 
          'debit_amount' => $debit_peso, 
          'rate' => $rate, 
          'transaction_number' => $transaction_number,
          'completed_by' => $this->session->userdata['Admid'], 
          'completed_on' => $completed_on 
      );
        $insert= $this->admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE time_deposit_request SET request_status = '1' WHERE id = '".$id."'");
            $rt= explode(",", $rate);
            $notifcation_message = 'Your Time Deposit Request of   ₱'.$debit_peso.' for '.$rt[0].' Year at '.$rt[1].'% is Completed, Thank you for your order';
            $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);
            $message='Success!!';
             $t_notification = $this->admin_panel_model->get_s_notification($client_id);
          $this->session->set_flashdata('success',$message); 
            // redirect("admin/time-deposit");
          // echo json_encode($t_notification);
           $user = $this->admin_panel_model->get_user_by_client($client_id);
          $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message,$user['device_type']);
        }
        else
        {
            $message='Failed !';
          $this->session->set_flashdata('failed',$message); 
            // redirect("admin/time-deposit");
        }
    }

    
    public function set_fixed_income_transaction()
    {
        $type = "Fixed Income"; 
        $id = $this->input->post('id');
        $client_id = $this->input->post('client_id');
        $rate = $this->input->post('rate');
        $debit_peso = $this->input->post('debit_peso');
        $transaction_number = $this->input->post('transaction_number');
        $completed_on = date("Y-m-d h:i:s A");
        $data = array(
          'client_id' => $client_id, 
          'type' => $type, 
          'debit_amount' => $debit_peso, 
          'rate' => $rate, 
          'transaction_number' => $transaction_number,
          'completed_by' => $this->session->userdata['Admid'], 
          'completed_on' => $completed_on 
      );
        $insert= $this->admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE fixed_income_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Fixed Income Request of   ₱'.$debit_peso.' for 1 Year at '.$rate.'% is Completed, Thank you for your order';
            $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);
            $message='Success!!';
            $f_notification = $this->admin_panel_model->get_s_notification($client_id);
          $this->session->set_flashdata('success',$message); 
            // redirect("admin/fixed-income");
          // echo json_encode($f_notification);
           $user = $this->admin_panel_model->get_user_by_client($client_id);
          $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message,$user['device_type']);
        }
        else
        {
            $message='Failed !';
          $this->session->set_flashdata('failed',$message); 
            // redirect("admin/fixed-income");
        }
    }


///////////////////////// End Mohit /////////////////



}
?>