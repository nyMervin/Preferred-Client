<?php
class Transaction extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'user';
    $this->data['module'] = 'transaction';
    $this->load->model('user_panel_model');    
}
    public function index()
	{
        $client_id = $this->session->userdata['id'];
        $this->data['page'] = 'index';
        $this->data['list'] = $this->user_panel_model->get_transaction($client_id);        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
}

?>
