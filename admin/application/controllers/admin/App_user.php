<?php 
class App_user extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'app_user';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function all()
    {
        $this->data['page']='list_all';
        $this->data['list'] = $this->admin_panel_model->get_user();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function branch()
    {
        $this->data['page']='list_by_branch';
        $this->data['branches'] = $this->admin_panel_model->get_branches();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


    public function branch_filter()
    {
        $branch = $this->input->post("branch");
        $from_date = $this->input->post("from_date");
        $to_date = $this->input->post("to_date");
        $this->data['page']='list_by_branch';
        $this->data['branches'] = $this->admin_panel_model->get_branches();
        $this->data['list'] = $this->admin_panel_model->get_user_by_branch_filter($branch,$from_date,$to_date);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }



    

///////////////////////// End Mohit /////////////////



}
?>