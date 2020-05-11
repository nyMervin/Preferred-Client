<?php 

class Gigs extends CI_Controller{

    public function __construct() {

        parent::__construct();

        $this->data['theme'] = 'branch_admin';

        $this->data['module'] = 'gigs';
        $this->load->helper('currency');
        $this->load->model('admin_panel_model');  



    }

    public function index ($start=0)

    {	 


        $this->data['page'] = 'index';

  
    }



}

?>