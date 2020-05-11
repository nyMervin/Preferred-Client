<?php 
class Timedeposit extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'timedeposit';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_time_deposit_requests();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>