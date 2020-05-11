<?php 
class Branch_code_list extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'branch_code_list';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    
    public function index()
    {
        $this->data['page']='index';
        $this->data['branches'] = $this->admin_panel_model->get_branches();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
///////////////////////// End Mohit /////////////////



}
?>