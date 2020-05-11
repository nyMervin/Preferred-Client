<?php
if (isset($this->session->userdata['Admid'])) 
{ 
	if($this->session->userdata('user_role') == 1)
	{
	$this->load->view($theme . '/includes/header_sidebar');
    $this->load->view($theme . '/includes/header_menu');
    $this->load->view($theme . '/modules/' . $module . '/' . $page);
    $this->load->view($theme . '/includes/footer');
    }
    elseif ($this->session->userdata('user_role') == 2)
    {
    	redirect(base_url(),'/branch-admin/home');
    }
    elseif ($this->session->userdata('user_role') == 3)
    {
        redirect(base_url(),'/super-admin/home');
    }
    else 
    {
     	$this->load->view($theme . '/pages/login');
    } 
}
else
{
    $this->load->view($theme . '/pages/login');
}
?>