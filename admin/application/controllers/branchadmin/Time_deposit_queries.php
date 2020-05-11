<?php 
class Time_deposit_queries extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'time_deposit_query';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function all()
    {
        $this->data['page']='time_deposit_query';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['depositor'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_all_time_deposit_branch($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
   
    public function query_by_date_branch()
    {
        $from_date =$this->input->post('from_date');
        $to_date =$this->input->post('to_date');
        $branch =$this->input->post('branch');
        $this->data['page']='time_deposit_query';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['depositor'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_time_deposit_date_filter($branch_code,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>