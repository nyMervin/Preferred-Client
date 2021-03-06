<?php 
class Update_exchange_rate extends CI_Controller{
    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'update_exchange_rate';
        $this->load->model('admin_panel_model');
        ob_start();
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

            // $response = curl_exec($ch);
            curl_exec($ch);

            curl_close($ch);

            // echo $result;
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_rates();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function update_rates()
    {
        $buying_rate = $this->input->post("buying_rate");
        $selling_rate = $this->input->post("selling_rate");
        $update = $this->admin_panel_model->update_rates($buying_rate,$selling_rate);
        if($update)
        {
            // $this->db->query("UPDATE `notification` SET `buying_dollars` = '".$buying_rate."', `selling_dollars` = '".$selling_rate."' ,send_at = '".date("Y-m-d h:i:s A")."',read_by =''  WHERE `notification`.`id` = 1");

            $notification ="Our Dollar Rates for today is Buying ₱ ".$buying_rate." , Selling ₱ ".$selling_rate.".";

            // $this->db->query("UPDATE `notification` SET `notification` = '".$notification."' ,send_at = '".date("Y-m-d h:i:s A")."' WHERE `notification`.`id` = 1");

            $this->db->insert("notification",array("type"=>"text","send_to"=>"all","buying_dollars"=>$buying_rate,"selling_dollars"=>$selling_rate,"send_at"=>date("Y-m-d h:i:s A"),"read_by"=>"","notification"=>$notification)); 


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
            
            $send_notification = $this->notifitation_android_all($users_token_android,$notification);

            $users_token_not_for_android = array();
            for ($i=0; $i < count($user_not_for_android) ; $i++) { 
                # code...
                // $token = implode(",", $user[$i]['device_token']);
                array_push($users_token_not_for_android,$user_not_for_android[$i]['device_token']);
                // echo $user[$i]['device_token'];
            // echo "<br>";

            }
            $send_notification = $this->notifitation_not_for_android_all($users_token_not_for_android,$notification);
            

            $lupdated_rates = $this->admin_panel_model->get_rates();

            $message='Rate Updated Successfully.';
            
          $this->session->set_flashdata('success',$message); 
          // echo json_encode($lupdated_rates);
            //redirect("admin/update-exchange-rate");
        }
        else
        {
            $message='Failed To Update Rates';
          $this->session->set_flashdata('failed',$message); 
          //echo '2';
            // redirect("admin/update-exchange-rate");
        }
    }
    

///////////////////////// End Mohit /////////////////



}
?>