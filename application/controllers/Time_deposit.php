<?php

class Time_deposit extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

    $this->data['theme'] = 'user';

    $this->data['module'] = 'time_deposit';

    $this->load->model('user_panel_model');

    $this->load->library('email');

    $this->load->library('form_validation');
        
        // $config = array(
        //         'protocol'  => ,
        //         'smtp_host' => ',
        //         'smtp_crypto' => '',
        //         'smtp_port' => ,
        //         'smtpdebug' => ,
        //         'smtp_user' => '',
        //         'smtp_pass' => ',
        //         'mailtype'  => ',
        //         'charset'   => '',
        //         'priority'  => 
        //     );
    $config['smtp_conn_options'] = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        $this->email->initialize($config);
        // $this->email->set_mailtype("html");
        // $this->email->set_newline("\r\n");       

}

    public function index()

	{

        $this->data['page'] = 'index';

        $this->data['list'] = $this->user_panel_model->get_rates();  
              
        $this->data['time_rate'] = $this->user_panel_model->get_time_rates();        

        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');      

	}

  public function confirm_time_deposit()

  {    


      $rate = $this->input->post('rate');

      $amount = $this->input->post('amount');

      $this->data['page'] = 'time_confirm';
      $totp = rand(11111,99999);

        $data = array(
            'client_id' => $this->session->userdata['id'],
            't_type' => 'Time Deposit',
            'otp' => $totp,
            'request_time' => date("Y-m-d h:i:s A")
            );

            $set_otp = $this->db->insert('otp_transaction',$data);

           $this->data['t_l_id'] = $this->db->insert_id();

            $this->db->select('id,first_name,last_name,email,status');

            $this->db->from('clients');

            $this->db->where('id', $this->session->userdata['id']);

            $this->db->where('verify', 1);

            $result = $this->db->get()->row_array();
            
            $this->data['user_email'] = $result['email'];

            $message = '<html><head>
                <title>Preferred Client Time Deposit Request</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['first_name'].' '. $result['last_name']. '!</h1>';
            $message .= '<p>You have Request for Time Deposit '.$rate.'</p>';
            $message .= '<p> Your code for this transaction is <b>'.$totp.'</b>' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($result['email']);
            $this->email->from();
            $this->email->subject('Preferred Client Time Deposit Request');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();
            if($send_mail)
            {
                $this->session->set_flashdata('reset_success','Check Your Email For Password Reset!');
                // echo 1;
            }
            else
            {
                $this->session->set_flashdata('reset_failed','Something Went Wrong!');
                // echo 2;
            }




        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');      

  }


    public function request()

    {

       $client_id=@$this->session->userdata['id'];

       $amount=@$this->input->post('amount');

       $request_time=date("Y-m-d h:i:s A");

       $rate=@$this->input->post('rate');

       $debit_peso=@$this->input->post('amount');

       $t_l_id = @$this->input->post('t_l_id');

       $otp = $this->input->post('otp');
       
       $notp = implode("", $otp);

       $this->db->select('id,client_id,otp,status');

        $this->db->from('otp_transaction');

        $this->db->where('client_id', $this->session->userdata['id']);

        $this->db->where('id', $t_l_id);

        $this->db->where('t_type', 'Time Deposit');

        // $this->db->order_by('request_time', 'DESC');

        $result = $this->db->get()->row_array();

        if($result['otp'] == $notp)
        {

          $insert_data=array(

             "client_id"=>$client_id,

              "amount"=>$amount,

               "request_time"=>$request_time,

                "rate"=>$rate,

                 "debit_peso"=>$debit_peso

          );

          $result = $this->db->insert("time_deposit_request",$insert_data);

          if(@$result)

            {

                $message='Success! Time Deposit Request .';

                $this->session->set_flashdata('success',$message); 

                redirect("time-deposit");

            }

          else

            {
              $message='Success! Time Deposit Request .';

                $this->session->set_flashdata('failed',$message); 

              redirect("time-deposit");

            }

        }
        else

            {
              $message='You have enter an wrong code! Try Again.';

                $this->session->set_flashdata('td_otp_failed',$message); 

              redirect("time-deposit");

            }

}
}


?>

