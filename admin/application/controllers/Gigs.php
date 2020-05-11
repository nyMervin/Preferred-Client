<?php

class Gigs extends CI_Controller{

  public function __construct() {

    parent::__construct();

    $this->load->helper('currency');


    $user_id = $this->session->userdata('SESSION_USER_ID');

  }
  public function index()
  {
    // var_dump($this->session->userdata('user_role'));
    if ($this->session->userdata('user_role') == 1) {
      redirect(base_url()."admin/home");
    }elseif ($this->session->userdata('user_role') == 2) {
      redirect(base_url()."branch-admin/home");
    }elseif ($this->session->userdata('user_role') == 3) {
      redirect(base_url()."super-admin/home");
    }
    else{
      $this->load->view('admin/pages/login');
    }
  }
}

?>
