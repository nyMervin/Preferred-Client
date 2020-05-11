<?php 
class App_user extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'app_user';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function branch()
    {
        $this->data['page']='branch_app_users';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function edit()
    {
        $this->data['page']='edit_branch_app_users';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function edit_user()
    {
        $client_id = $this->uri->segment(3, 0);
        $this->data['page']='edit_user';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['user'] = $this->branch_admin_panel_model->get_branch_user($branch_code,$client_id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    
    public function chnage_user_status()
    {
        $client_id = $this->input->post('adminid');
        $checkstatus = $this->branch_admin_panel_model->get_user_by_id($client_id);
        if($checkstatus['status'] >0){
            $updatedata = array('status'=>'0'); 
        }
            else{
                $updatedata = array('status'=>'1'); 
            }
           
        $this->branch_admin_panel_model->chnage_user_status($updatedata,$client_id);
        echo $checkstatus['status'];
    }
    

///////////////////////// End Mohit /////////////////



}
?>