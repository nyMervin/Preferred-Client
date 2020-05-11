<?php
class Dashboard extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'dashboard';
    $this->load->model('admin_login_model');    
    $this->load->model('admin_panel_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['list'] = $this->admin_panel_model->get_rates();        
        $this->data['t_list'] = $this->admin_panel_model->get_time_deposit_rates();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
}

?>
