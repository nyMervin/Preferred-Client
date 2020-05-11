<?php 
class Buyselldollar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'buyselldollar';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
    public function buy()
    {
        $this->data['page']='buy';
        $branch_code = $this->branch_admin_panel_model->branch_code();
         $this->data['list'] = $this->branch_admin_panel_model->buy_dollar($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function sell()
    {
        $this->data['page']='sell';
        $branch_code = $this->branch_admin_panel_model->branch_code();
        $this->data['list'] = $this->branch_admin_panel_model->sell_dollar($branch_code);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>