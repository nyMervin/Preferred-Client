<?php 
class Buyselldollar_query extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'buyselldollar_query';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function all()
    {
        $this->data['page']='query_all';
        $this->data['list'] = $this->admin_panel_model->get_all_buy_dollar();
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
    public function query_by_date()
    {
        $from_date =$this->input->post('from');
        $to_date =$this->input->post('to');
        $this->data['page']='query_all';
        $this->data['list'] = $this->admin_panel_model->get_all_buy_dollar_date_filter($from_date,$to_date);
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
        $this->data['list'] = $this->admin_panel_model->get_buy_dollar_date_branch_filter($branch,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

///////////////////////// End Mohit /////////////////



}
?>