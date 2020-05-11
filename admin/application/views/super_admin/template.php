<?php

if (isset($this->session->userdata['Admid'])) 
{ 
	if($this->session->userdata('user_role') == 1)
	{
        redirect(base_url(),'/admin/home');	
    }
    elseif ($this->session->userdata('user_role') == 2)
    {
        redirect(base_url(),'/branch-admin/home');
    }elseif ($this->session->userdata('user_role') == 3)
    {
        $this->load->view($theme . '/includes/header_sidebar');
        $this->load->view($theme . '/includes/header_menu');
        $this->load->view($theme . '/modules/' . $module . '/' . $page);
        $this->load->view($theme . '/includes/footer');
    }
    else 
    {
     	redirect(base_url(),'/pages/login');
    } 
}
else 
    {
        
        redirect(base_url(),'/pages/login');
    } 
?>