<?php
class Auth extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->load->library('email');
    $this->load->model('admin_login_model');    
    $this->load->model('admin_panel_model');
    $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_crypto' => 'tls',
                'smtp_port' => 587,
                'smtpdebug' => 4,
                'smtp_user' => 'mohit.chack@digimonk.in',
                'smtp_pass' => 'mohit@digimonk',
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'priority'  => 1
            );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");       
}
    public function is_valid_login()
    {
        $branch = $this->input->post('branch');
        $username = $this->input->post('username');
        $password = $this->input->post('password');    
        $result = $this->admin_login_model->is_valid_login($branch,$username,$password);
        if(!empty($result))
        {
            if($result['status'] != 0)
            {                
            $this->session->set_userdata('Admid',$result['ADMINID']);  
            $this->session->set_userdata('SESSION_USER_ID',$result['ADMINID']);  
            $this->session->set_userdata('user_role',$result['user_role']);   
            echo 1;
            }
            else
            {
                $this->session->set_flashdata('message','Your Account is dactivated By Super Admin!');
                echo 2;
            }
        }
     else 
        { 
            $this->session->set_flashdata('message_deativated','wrong login credentials!');
            echo 2;
            
        }
    }
    public function logout() 
    {
        if (!empty($this->session->userdata['Admid'])) 
            {
                $this->session->unset_userdata('Admid');
                $this->session->unset_userdata('user_role');
                $this->session->unset_userdata('SESSION_USER_ID');
            }
        redirect(base_url($this->data['theme']));
    }
    public function reset_password()
    {           
        $this->load->view('pages/reset_password');
      
    }
    public function forget_password()
    {           
        // var_dump($this->input->post());
        $branch = $this->input->post('branch');
        $username = $this->input->post('username');
        $result = $this->admin_panel_model->check_admin($branch,$username);
        if($result) 
        {
            $fotp = rand(11111,99999);

            $data = array(
                'forget_otp' => $fotp,
            );
            $this->db->where('ADMINID',$result['ADMINID'])->update('administrators', $data);
            $message = '<html><head>
                <title>Preferred Client Reset password</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['name'].'!</h1>';
            $message .= '<p><a href="'.base_url().'user-reset-password/' . base64_encode($result['ADMINID']) . '">CLICK TO RESET YOUR ACCOUNT PASSWORD </a></p>';
            $message .= '<p>Your Forget Password Code is <b>'.$fotp.'</b> Use to set your new password.' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($result['email']);
            $this->email->from('mohit.chack@digimonk.in', 'Preferred Client');
            $this->email->subject('Preferred Client Admin Forget Password');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();
            if($send_mail)
            {
                $this->session->set_flashdata('reset_success','Check Your Email('.$result['email'].') For Password Reset!');
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
            $this->session->set_flashdata('reset_failed','Check Your Branch OR Username !');
                echo 3;
        }
    }
}

?>
