<?php

class Auth extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

    $this->data['theme'] = 'user';

    $this->data['module'] = 'dashboard';

    $this->load->model('user_login_model');    

    $this->load->model('user_panel_model'); 

    $this->load->library('form_validation');

    $this->load->library('email');

    $this->load->library('email');
      
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

    public function test_mail()
    {
    	$message = ' !';
        $mail_message = $message;
        $this->email->to(');
        $this->email->from();
        $this->email->subject(');
        $this->email->message($mail_message);
        $send = $this->email->send();  
        if($send){
        	echo "Mail Send Success.";
        }
        else
        {
        	echo "Failed!";
        }
    }

    public function sign_up()

    {           

        // $this->data['list'] = $this->user_panel_model->get_rates();        

        $this->load->vars($this->data);

        $this->load->view('user/pages/sign_up');

      

    }

    public function help()

    {           

        $this->load->vars($this->data);

        $this->load->view('user/pages/help');

      

    }

    public function forget_password()

    {           

        $this->load->vars($this->data);

        $this->load->view('user/pages/forget_password');

      

    }

    public function client_signup()

    {

       // var_dump($this->input->post('fixedincomeaccount'));

        $first_name = $this->input->post('first_name');

        $last_name = $this->input->post('last_name');

        $email = $this->input->post('email');

        $cpcc = $this->input->post('cpcc');

        $contact = $this->input->post('contact');

        $ppeso = $this->input->post('ppeso');

        $speso = $this->input->post('speso');

        $usaccount = $this->input->post('usaccount');

        $timeaccount = $this->input->post('timeaccount');

        $fixedincomeaccount = $this->input->post('fixedincomeaccount');

        $branch = $this->input->post('branch');

        $branchcode = $this->input->post('branchcode');

        $accountofficer = $this->input->post('accountofficer');

        $aocc = $this->input->post('aocc');

        $accountofficercon = $this->input->post('accountofficercon');

        $ncontact = $cpcc.$contact;

        $naccountofficercon = $aocc.$accountofficercon;


        $otp = rand(11111,99999);



        $data = array(

            'first_name' => $first_name, 

            'last_name' => $last_name, 

            'cellphone' => $ncontact, 

            'email' => $email, 

            'primary_peso_account' => $ppeso, 

            'secondary_peso_account' => $speso, 

            'us_dollar_account' => $usaccount, 

            'time_deposit_account' => $timeaccount, 

            'fixed_income_account' => $fixedincomeaccount, 

            'branch' => $branch, 

            'branch_code' => $branchcode, 

            'created_on' => date("Y-m-d h:i:s A"), 

            'account_officer' => $accountofficer, 

            'account_officer_cell' => $naccountofficercon,

            'join_by' => 'Web',

            'otp' => $otp

        );



        $insert = $this->db->insert('clients',$data);



        // var_dump($this->db->last_query());



        // $check_email_contact = $this->user_login_model->is_valid_login($email,$contact);   

        // if(!empty($result))

        if($insert)

        {
            $mail_message = $otp;
            $this->email->to($email);
            $this->email->from(');
            $this->email->subjec');
            $this->email->message($mail_message);
            $this->email->send();  
            // $this->load->view("email/send",array("email"=>$email,"subject"=>'New Registration ',"body"=>$otp));

            $insert_id = $this->db->insert_id();

            $notifaction = 'Welcome to Preferred Client.';
                $data = array(
                  'send_to' => $insert_id, 
                  'type' => 'text', 
                  'notification' => $notifaction, 
                  'send_at' => date("Y-m-d h:i:s A")
              );
            $this->db->insert('notification',$data);

            $this->session->set_userdata('temp',$insert_id);

            echo 1;

        }

     else 

        { 

            $this->session->set_flashdata('signup_failed','Email Allready Used!');

            echo 2;

            

        }

    }

    public function privacy_policy()

    {           

        $this->load->vars($this->data);

        $this->load->view('user/pages/privacy_policy');

    }
    public function otp_confirmation()

    {           

        $this->load->vars($this->data);

        $this->load->view('user/pages/confirmation'); 

    }


    public function check_email()

    {        
        $emailid = $this->input->post('emailid');

        $check_emaill = $this->db->query("SELECT * FROM clients WHERE email='" . $emailid. "'")->row_array();

        if(count($check_emaill) > 0) 
        {
            echo "<span style='color:red'> Email already exist .</span>";
        }
        else 
            {
                //echo "<span style='color:green'> Username Available.</span>";
            }
    }


    public function check_otp()

    {        
        $otp = $this->input->post('otp');
        $notp = implode("", $otp);

        $this->db->select('otp,email,status');

        $this->db->from('clients');

        $this->db->where('id', $this->session->userdata['temp']);

        $this->db->where('verify', 0);

        $result = $this->db->get()->row_array();     

        // echo $notp;
        // var_dump($result['otp']);
        if($result['otp'] == $notp)
        {
            redirect('set-password');
        }
        else
        {
            $this->session->set_flashdata('otp_error','Please enter a valid OTP!');
            redirect('confirmation');
        }
    }

    public function reset_otp()
    {
        $client_id = $this->session->userdata['temp'];

        $this->db->select('otp,email,status');

        $this->db->from('clients');

        $this->db->where('id', $client_id);

        $this->db->where('verify', 0);

        $result = $this->db->get()->row_array();

        

        if($result){
            $rotp = rand(11111,99999);

            $data = array(
                'otp' => $rotp,
            );
            $this->db->where('id',$client_id)->update('clients', $data);

            // $this->load->view("email/send",array("email"=>@$client['email'],"subject"=>'New Registration ',"body"=>$client['email']));

            $mail_message = $rotp;
            $this->email->to($result['email']);
            $this->email->from(');
            $this->email->subject(');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();
            if($send_mail)
            {
                 $this->session->set_flashdata('otp_resent','OTP send to your "'.$result['email'].'" Email.');
                 redirect('confirmation'); 
            }
            else
            {
            $this->session->set_flashdata('otp_resent_error','Something Went Wrong!');
            redirect('confirmation');           
        }
    }
    else{
            $this->session->set_flashdata('otp_resent_error','Something Went Wrong!');
            redirect('confirmation');
        }
    }
    public function set_password()

    {           

        $this->load->vars($this->data);

        $this->load->view('user/pages/set_password'); 

    }

    public function set_user_password()

    {

        $password = $this->input->post('password');

        $user_id = $this->input->post('user_id');

        if($user_id != "" && $password != "")

        {

            $set_pass = $this->user_login_model->set_password($user_id,$password);

            if($set_pass)

            {
                
                $this->session->unset_userdata('temp');

                $this->session->set_flashdata('Success','Registration Success! Please Login.');

                echo 1;

            }

         else 

            { 

                $this->session->set_flashdata('message','Something Went Wrong!!');

                echo 2;

                

            }



        }

    }

    public function is_valid_signin()

    {

        $email = $this->input->post('email');

        $password = $this->input->post('password');    

        $result = $this->user_login_model->is_valid_login($email,$password);   

        if(!empty($result))

        {
            if($result['status'] != 0)
            {

                $this->session->set_userdata('id',$result['id']);  

                $this->session->set_userdata('email',$result['email']);  

                echo 1;
            }
            else
            {
                $this->session->set_flashdata('message','Your Account is deactivated!');
                echo 2;
            }

        }

     else 

        { 

            $this->session->set_flashdata('message_deactivated','Check Your Email OR Password!');

            echo 2;

            

        }

    }

    public function reset_password() 
    {
        $email = $this->input->post('email');

        $this->db->select('id,first_name,last_name,email,status');

        $this->db->from('clients');

        $this->db->where('email', $email);

        // $this->db->where('verify', 1);

        $result = $this->db->get()->row_array();



        if($result) 
        {
            $fotp = rand(11111,99999);

        $data = array(
            'forget_otp' => $fotp,
        );

            $this->db->where('id',$result['id'])->update('clients', $data);

            $message = '<html><head>
                <title>Preferred Client Reset password</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['first_name'].' '. $result['last_name']. '!</h1>';
            $message .= '<p><a href="'.base_url().'user-reset-password/' . base64_encode($result['id']) . '">CLICK TO RESET YOUR ACCOUNT PASSWORD </a></p>';
            $message .= '<p>Your Forget Password Code is <b>'.$fotp.'</b> Use to set your new password.' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($email);
            $this->email->from();
            $this->email->subject('Preferred Client Forget Password');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();
            if($send_mail)
            {
                $this->session->set_flashdata('reset_success','Check Your Email For Password Reset!');
                echo 1;
            }
            else
            {
                $this->session->set_flashdata('reset_failed','Something Went Wrong!');
                echo 2;
            }
        }
        else
        {
            $this->session->set_flashdata('reset_failed','Something Went Wrong!');
                echo 3;
        }

    }
    public function confirm_reset_password()

    {   

        $client_id = $this->uri->segment(2, 0);

        $this->data['client_id'] = $client_id;

        $this->load->vars($this->data);

        $this->load->view('user/pages/confirm_reset_password'); 

    }
    public function check_confirm_reset_password()

    {   
        $client_id = $this->input->post('client_id');
        $fclient_id = intval(base64_decode($this->input->post('client_id')));
        $this->form_validation->set_rules('newpass','new password','required'); 
        $this->form_validation->set_rules('conpass','confirm password','required');

        if($this->form_validation->run())
        {

            $new_pass=$this->input->post('newpass');

            $con_pass=$this->input->post('conpass');
            if($new_pass == $con_pass){

                $fotp = $this->input->post('otp');

                $fnotp = implode("", $fotp);

                $this->db->select('forget_otp,email,status');

                $this->db->from('clients');

                $this->db->where('id', $fclient_id);

                $this->db->where('verify', 1);

                $result = $this->db->get()->row_array();     

                if($result['forget_otp'] == $fnotp)
                {
                    $data = array(
                    'password' => md5($new_pass),
                    );
                    $this->db->where('id',$fclient_id)->update('clients', $data);
                    $this->session->set_flashdata('fp_success','Password Changed Successed! Please Login.');
                    redirect(base_url());
                }
                else
                {
                    $this->session->set_flashdata('fotp_error','Incorrect Forget code ! ,Check your email.');
                    redirect('user-reset-password/'.$client_id);
                }
       
            }else{
                $warning="Confirm password doesn't match!";

                $this->session->set_flashdata("fwarning",$warning);
                redirect('user-reset-password/'.$client_id);
        }
    }
    else{
                $warning="Confirm password doesn't match!";

                $this->session->set_flashdata("fwarning",$warning);
                redirect('user-reset-password/'.$client_id);
    }
}

    public function logout() 
    {

        if (!empty($this->session->userdata['id'])) 

            {

                $this->session->unset_userdata('id');

                $this->session->unset_userdata('email');

            }

        redirect(base_url());

    }

    

}



?>

