<?php 
class Setting extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'setting';
        $this->load->model('admin_panel_model');
        $this->load->library('form_validation');
        
    }
    public function index()
    {

        $this->data['page']='index';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
        

    }  
    
    
    
public function change()
{
        
    $this->form_validation->set_rules('oldp','old password','required');
    $this->form_validation->set_rules('newp','new password','required'); 
    $this->form_validation->set_rules('conp','confirm password','required'); 
    if($this->form_validation->run())
    {
    
        $old_pass=$this->input->post('oldp');
        $new_pass=$this->input->post('newp');
        $con_pass=$this->input->post('conp');  
       
       
        
        $userid = '1';
        $pass = $this->admin_panel_model->getcurrentpassword($userid);
        if($new_pass == $con_pass){
            
        }else{
              $warning="confirm password doesn't match!";
$this->session->set_flashdata("warning",$warning);
        }
        if($pass->password == md5($old_pass)) {
             if($this->admin_panel_model->updatepassword(md5($new_pass), $userid))
        {
            $message='password updated  successfully.';

					 $this->session->set_flashdata('message',$message);            
        }
        else{
        }
    } else{
             $warni="old password is not correct!";
$this->session->set_flashdata("warni",$warni);
            
        }
    }
    else{
         $warn="please enter correct values!";
$this->session->set_flashdata("warn",$warn);            
    }
  redirect ("admin/setting");
}

  
}
    ?>