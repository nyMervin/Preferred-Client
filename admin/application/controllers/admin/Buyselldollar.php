<?php 
class Buyselldollar extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'buyselldollar';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function buy()
    {
        $this->data['page']='buy';
        $this->data['list'] = $this->admin_panel_model->buy_dollar();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function sell()
    {
        $this->data['page']='sell';
        $this->data['list'] = $this->admin_panel_model->sell_dollar();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    

///////////////////////// End Mohit /////////////////



}
?>