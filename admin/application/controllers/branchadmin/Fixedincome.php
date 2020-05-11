<?php 
class Fixedincome extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'fixedincome';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_all_fixed_income_requests($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>