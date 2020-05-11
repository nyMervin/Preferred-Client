<?php 
class Fixed_income_queries extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'fixed_income_query';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function all()
    {
        $this->data['page']='query_all';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_all_fixed_income($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_by_date()
    {
        $from_date =$this->input->post('from');
        $to_date =$this->input->post('to');
        $this->data['page']='query_all';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->get_all_fixed_income_date_filter($branch_code,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>