<?php 

class Gigs extends CI_Controller{

    public function __construct() {

        parent::__construct();

        $this->data['theme'] = 'superadmin';

        $this->data['module'] = 'gigs';
        $this->load->helper('currency');
        $this->load->model('super_admin_panel_model');  



    }

    public function index ($start=0)

    {	 


        $this->data['page'] = 'index';

  
    }



}

?>