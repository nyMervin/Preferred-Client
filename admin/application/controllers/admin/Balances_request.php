<?php 
class Balances_request extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'balances_request';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_all_balance_request();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_date()
    {
        $from_date = $this->input->post('from');
        $to_date = $this->input->post('to');
        $this->data['page']='index';
        $this->data['list'] = $this->admin_panel_model->get_all_balance_request_by_date($from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


    

///////////////////////// End Mohit /////////////////



}
?>