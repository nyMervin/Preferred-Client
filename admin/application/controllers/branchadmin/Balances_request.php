<?php 
class Balances_request extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'balances_request';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_all_balance_request($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_date()
    {
        $from_date =$this->input->post('from_date');
        $to_date =$this->input->post('to_date');
        $this->data['page']='index';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_all_balance_request_by_date($branch_code,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    
    

///////////////////////// End Mohit /////////////////



}
?>