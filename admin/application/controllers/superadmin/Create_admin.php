<?php 
class Create_admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'super_admin';
        $this->data['module'] = 'create_admin';
        $this->load->model('super_admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['branchlist'] = $this->super_admin_panel_model->get_branches();
        $this->data['lastuserid'] = $this->super_admin_panel_model->get_last_adminuserid();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

public function add_admin()
    {
         date_default_timezone_set('Asia/Kolkata');

        $name = $this->input->post('username');
        $username1 = $this->input->post('username');
        $username = preg_replace('/\s/', '', $username1);
        $status = $this->input->post('status');
        $branch_name1 = $this->input->post('branch_name');
        $branchid = $this->input->post('branchid');
        $role = $this->input->post('role');
        $account_no = $this->input->post('account_no');
        $adminid = $this->input->post('adminid');
        $password = md5($this->input->post('password'));
        $emailid = $this->input->post('emailid');
        $phoneno = $this->input->post('phoneno');
$allbranch = $this->super_admin_panel_model->get_branches();
foreach ($allbranch as $value) {
    if($value['branch_code']==$branch_name1){ $branch_name = $value['branch_name']; }
}
        $cdate = date("d-m-Y h:i:s A");
        $adddata = array('name'=>$name,'user_role'=>$role,'profile_picture'=>'','branch'=>$branchid,'email'=>$emailid,'username'=>$username,'password'=>$password,'branch_name'=>$branch_name,'status'=>$status,'account_no'=>$account_no,'cdate'=>$cdate,'phone'=>$phoneno);
        /*echo '<pre>';
        print_r($adddata);
        echo '</pre>';*/
        
        $insert= $this->super_admin_panel_model->add_admin($adddata);
        if($insert)
        {
           echo $message='Admin Created Successfully';
          $this->session->set_flashdata('success',$message); 
            redirect("super-admin/create-admin");
        }
        else
        {
            echo $message='Failed To Create Admin';
          $this->session->set_flashdata('failed',$message); 
            redirect("super-admin/create-admin");
        }
        die;
    }
///////////////////////// End Mohit /////////////////



}
?>