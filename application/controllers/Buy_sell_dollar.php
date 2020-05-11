<?php

class Buy_sell_dollar extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

    $this->data['theme'] = 'user';

    $this->data['module'] = 'buy_sell_dollar';

    $this->load->model('user_panel_model');  

    $this->load->library('email');

    $this->load->library('form_validation');
        
        // $config = array(
        //         'protocol'  => ,
        //         'smtp_host' => 
        //         'smtp_crypto' => ,
        //         'smtp_port' => 
        //         'smtpdebug' => 
        //         'smtp_user' => 
        //         'smtp_pass' => ,
        //         'mailtype'  => ,
        //         'charset'   => ,
        //         'priority'  => 1
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


public function resend_otp_code()
	{
      $transid = $this->input->post('transid');
      $howmuch = $this->input->post('howmuch');
      $type = $this->input->post('type');
      
      $ltdetail = $this->user_panel_model->get_last_transaction_details($transid); 
      $ltdetail[0]['client_id'];
      
      $totp = rand(11111,99999);

        $udata = array(
            'otp' => $totp,
            );

        $this->user_panel_model->update_last_transaction_otp($udata,$transid);
        $client = $this->user_panel_model->get_me($ltdetail[0]['client_id']);
        
            $message = '<html><head>
                <title>Preferred Client '.$type.' Request</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $client['first_name'].' '. $client['last_name']. '!</h1>';
            $message .= '<p>You have Request to '.$type.' $'.$howmuch.'</p>';
            $message .= '<p> Your code for this transaction is <b>'.$totp.'</b>' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($client['email']);
            $this->email->from();
            $this->email->subject('Preferred Client '.$type.' Request Resent OTP');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();
            if($send_mail)
            {
                $this->session->set_flashdata('reset_success','Check Your Email For OTP!');
                 echo 1;
            }
            else
            {
                $this->session->set_flashdata('reset_failed','Something Went Wrong!');
                 echo 2;
            }


	}


  public function confirm_buy_dollar()
	{
      $buydollar = $this->input->post('how_much');
      $this->data['page'] = 'buy_confirm';
      $totp = rand(11111,99999);

        $data = array(
            'client_id' => $this->session->userdata['id'],
            't_type' => 'Buy Dollar',
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
                <title>Preferred Client Buy Dollar Request</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['first_name'].' '. $result['last_name']. '!</h1>';
            $message .= '<p>You have Request to Buy Dollar $'.$buydollar.'</p>';
            $message .= '<p> Your code for this transaction is <b>'.$totp.'</b>' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($result['email']);
            $this->email->from();
            $this->email->subject('Preferred Client Buy Dollar Request');
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


  public function confirm_sell_dollar()
  {
      $buydollar = $this->input->post('how_much');
      $this->data['page'] = 'sell_confirm';
      $totp = rand(11111,99999);

        $data = array(
            'client_id' => $this->session->userdata['id'],
            't_type' => 'Sell Dollar',
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
                <title>Preferred Client Buy Dollar Request</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['first_name'].' '. $result['last_name']. '!</h1>';
            $message .= '<p>You have Request to Sell Dollar $'.$buydollar.'</p>';
            $message .= '<p> Your code for this transaction is <b>'.$totp.'</b>' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($result['email']);
            $this->email->from(');
            $this->email->subject('Preferred Client Sell Dollar Request');
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
  public function buy_dollar()
  {

        $this->data['page'] = 'buydollar';

        $this->data['list'] = $this->user_panel_model->get_rates();        

        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');

      

  }

    public function sell_dollar()

    {

        $this->data['page'] = 'selldollar';

        $this->data['list'] = $this->user_panel_model->get_rates();        

        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');

      

    }

    public function user_buy_dollar()

    {

       $client_id = @$this->session->userdata['id'];

       $amount = @$this->input->post('how_much');

       $t_l_id = @$this->input->post('t_l_id');

       $credit_dollar = @$this->input->post('credit_amount');

       $debit_peso = @$this->input->post('debit_amount');

       $otp = $this->input->post('otp');
       
       $notp = implode("", $otp);

       $this->db->select('id,client_id,otp,status');

        $this->db->from('otp_transaction');

        $this->db->where('client_id', $this->session->userdata['id']);

        $this->db->where('id', $t_l_id);

        $this->db->where('t_type', 'Buy Dollar');

        // $this->db->order_by('request_time', 'DESC');

        $result = $this->db->get()->row_array();

        if($result['otp'] == $notp)
        {
          $insert_data=array(

             "client_id"=>$client_id,

              "amount"=>$amount,

               "credit_dollar"=>$credit_dollar,

                "debit_peso"=>$debit_peso,

                "request_time" => date("Y-m-d h:i:s A")

          );

          $result = $this->db->insert("buy_dollar_requests",$insert_data);

          if(@$result)

            {

                $message='Success! Buy Dollar Request.';

                $this->session->set_flashdata('success',$message); 

                redirect("buy-dollar");

            }

          else

            {

              redirect("buy-dollar");

            }
        }
        else
        {
           $message='You have enter an wrong code! Try Again.';
           $this->session->set_flashdata('t_otp_failed',$message);
          redirect("buy-dollar");
        }


       

    }

    public function user_sell_dollar()

    {
      

       $client_id = @$this->session->userdata['id'];

       $amount = @$this->input->post('how_much');

       $credit_peso = @$this->input->post('credit_amount');

       $debit_dollar = @$this->input->post('debit_amount');

       $t_l_id = @$this->input->post('t_l_id');

      $otp = $this->input->post('otp');
       
       $notp = implode("", $otp);

       $this->db->select('id,client_id,otp,status');

        $this->db->from('otp_transaction');

        $this->db->where('client_id', $this->session->userdata['id']);

        $this->db->where('id', $t_l_id);

        $this->db->where('t_type', 'Sell Dollar');

        // $this->db->order_by('request_time', 'DESC');

        $result = $this->db->get()->row_array();

        if($result['otp'] == $notp)
        {
          $insert_data=array(

             "client_id"=>$client_id,

              "amount"=>$amount,

               "credit_peso"=>$credit_peso,

                "debit_dollar"=>$debit_dollar,

                "request_time" => date("Y-m-d h:i:s A")

          );

          $result = $this->db->insert("sell_dollar_requests",$insert_data);

          if(@$result)

            {

                $message='Success! Sell Dollar Request.';

                $this->session->set_flashdata('success',$message); 

                redirect("sell-dollar");

            }

          else

            {

              redirect("sell-dollar");

            }

        }
        else
        {
          $message='You have enter an wrong code! Try Again.';
           $this->session->set_flashdata('st_otp_failed',$message);
          redirect("sell-dollar");
        }





       

    }



    

}



?>

