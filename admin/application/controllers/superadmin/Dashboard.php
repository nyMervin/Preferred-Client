<?php
class Dashboard extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'super_admin';
    $this->data['module'] = 'dashboard';
    $this->load->model('admin_login_model');    
    $this->load->model('super_admin_panel_model');    
}
    public function index()
	{         	
        //var_dump($this->session->userdata('user_role'));
        $this->data['page'] = 'index';
        $this->data['list'] = $this->super_admin_panel_model->get_rates();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
}

?>
