<?php 
class Selldollar_query extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'selldollar_query';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function all()
    {
        $this->data['page']='query_all';
        $this->data['list'] = $this->admin_panel_model->get_all_sell_dollar();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function branch()
    {
        $this->data['page']='query_branch';
        $this->data['branches'] = $this->admin_panel_model->get_branches();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function depositor()
    {
        $this->data['page']='query_depositor';
        $this->data['depositor'] = $this->admin_panel_model->get_user();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_by_date()
    {
        $from_date =$this->input->post('from');
        $to_date =$this->input->post('to');
        $this->data['page']='query_all';
        $this->data['list'] = $this->admin_panel_model->get_all_sell_dollar_date_filter($from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_by_date_branch()
    {
        $from_date =$this->input->post('from_date');
        $to_date =$this->input->post('to_date');
        $branch =$this->input->post('branch');
        $this->data['page']='query_branch';
        $this->data['branches'] = $this->admin_panel_model->get_branches();
        $this->data['list'] = $this->admin_panel_model->get_sell_dollar_date_branch_filter($branch,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
     public function branch_depositor_filter()
    {
        $branch = $this->input->post("branch");
        $from_date = $this->input->post("from_date");
        $to_date = $this->input->post("to_date");
        $this->data['page']='list_by_branch';
        $this->data['list'] = $this->admin_panel_model->get_user_by_branch_filter($branch,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function query_by_depositor()
    {
        $app_user = $this->input->post("app_user");
        $from_date = $this->input->post("from_date");
        $to_date = $this->input->post("to_date");
        $this->data['page']='query_depositor';
        $this->data['depositor'] = $this->admin_panel_model->get_user();
        $this->data['list'] = $this->admin_panel_model->get_query_by_depositor($app_user,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


///////////////////////// End Mohit /////////////////



}
?>