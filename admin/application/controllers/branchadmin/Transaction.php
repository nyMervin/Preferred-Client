<?php 
class Transaction extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'blank_module';
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
        $insert= $this->branch_admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE buy_dollar_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Transaction is to buy $'.$credit_dollar.' is completed Bought $'.$credit_dollar.' Debited ₱'.$debit_peso.' Credited $'.$credit_dollar.' .Thank you for your order';
            $alert_data = array(
          'send_to' => $client_id, 
          'type' => 'ALERT', 
          'notification' => $notifcation_message, 
          'created_by' => $this->session->userdata['Admid'], 
          'send_at' => date("Y-m-d h:i:s A") 
           );
            $this->db->insert('notification',$alert_data);
            // redirect("branch-admin/buy-dollar");
            $user = $this->branch_admin_panel_model->get_user_by_client($client_id);
            $send_notification = $this->notifitation_android($user['device_token'],$notifcation_message);

            $message='Success!!';
          $this->session->set_flashdata('success',$message); 
            // redirect("admin/buy-dollar");
          // $s_notification = $this->branch_admin_panel_model->get_s_notification($client_id);
          // echo json_encode($s_notification);
        }
        else
        {
            $message='Failed !!';
          $this->session->set_flashdata('failed',$message); 
            // redirect("branch-admin/buy-dollar");
        }
    }
    public function set_sell_dollar_transaction()
    {
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
        $insert= $this->branch_admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE sell_dollar_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Transaction is to Sell $'.$debit_dollar.' is completed Bought ₱'.$credit_peso.' Debited $'.$debit_dollar.' Credited ₱'.$credit_peso.' .Thank you for your order';
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
            // redirect("branch-admin/sell-dollar");
          // $s_notification = $this->branch_admin_panel_model->get_s_notification($client_id);
          // echo json_encode($s_notification);

        }
        else
        {
            $message='Failed To Send  !';
          $this->session->set_flashdata('Failed',$message); 
            // redirect("branch-admin/sell-dollar");
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
        $rt = explode(",", $rate);
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
	 // var_dump($data);
        $insert= $this->branch_admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE time_deposit_request SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Time Deposit Request of   ₱'.$debit_peso.' for '.$rt[0].' Year at '.$rt[1].'% is Completed, Thank you for your order';
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
            // redirect("branch-admin/sell-dollar");
          // $s_notification = $this->branch_admin_panel_model->get_s_notification($client_id);
          // echo json_encode($s_notification);
        }
        else
        {
          echo  $message='Failed!!';
          $this->session->set_flashdata('failed',$message); 
            // redirect("branch-admin/time-deposit");
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
        $rt = explode(",", $rate);
		//var_dump($rate);
        $data = array(
          'client_id' => $client_id, 
          'type' => $type, 
          'debit_amount' => $debit_peso, 
          'rate' => $rate, 
          'transaction_number' => $transaction_number,
          'completed_by' => $this->session->userdata['Admid'], 
          'completed_on' => $completed_on 
      );
        $insert= $this->branch_admin_panel_model->insert_transaction($data);
        if($insert)
        {
            $this->db->query("UPDATE fixed_income_requests SET request_status = '1' WHERE id = '".$id."'");
            $notifcation_message = 'Your Fixed Income Request of   ₱'.$debit_peso.' for '.$rt[0].' Year at '.$rt[1].'% is Completed, Thank you for your order';
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
            // redirect("branch-admin/sell-dollar");
          // $s_notification = $this->branch_admin_panel_model->get_s_notification($client_id);
          // echo json_encode($s_notification); 
            //redirect("branch-admin/fixed-income");
        }
        else
        {
            $message='Failed !';
          $this->session->set_flashdata('failed',$message); 
            //redirect("branch-admin/fixed-income");
        }
    }



///////////////////////// End Mohit /////////////////



}
?>