<?php 
class Selldollar_query extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'selldollar_query';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function depositor()
    {
        $this->data['page']='sell_query_depositors';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['depositor'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_all_sell_dollar($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
   public function query_by_depositor()
    {
        $app_user = $this->input->post('app_user');
        $from_date =$this->input->post('from_date');
        $to_date =$this->input->post('to_date');
        $this->data['page']='sell_query_depositors';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['depositor'] = $this->branch_admin_panel_model->get_user($branch_code);
        $this->data['list'] = $this->branch_admin_panel_model->get_sell_query_by_depositor_date_filter($app_user,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


///////////////////////// End Mohit /////////////////



}
?>