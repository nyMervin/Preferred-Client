<?php 
class Manage_admin_users extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'super_admin';
        $this->data['module'] = 'manage_admin_users';
        $this->load->model('super_admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->super_admin_panel_model->get_all_admin();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function profile($said)
    {

        $this->data['page']='profile';
        $this->data['branchlist'] = $this->super_admin_panel_model->get_branches();
        $this->data['list'] = $this->super_admin_panel_model->get_admin_details_byid($said);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


    public function chnage_status_admin()
    {
        $adminid = $this->input->post('adminid');
        $checkstatus = $this->super_admin_panel_model->get_admin_details_byid($adminid);
        if($checkstatus[0]['status'] >0){
            $updatedata = array('status'=>'0'); 
        }
            else{
                $updatedata = array('status'=>'1'); 
            }
           
        $this->super_admin_panel_model->chnage_status_admin($updatedata,$adminid);
        echo $checkstatus[0]['status'];
    }
    

    public function admin()
    {

        $this->data['page']='admin';
        $this->data['list'] = $this->super_admin_panel_model->get_admin('1');
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }



    public function branch_admin()
    {

        $this->data['page']='admin';
        $this->data['list'] = $this->super_admin_panel_model->get_admin('2');
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    
    public function get_items()
    {
      $draw = intval($this->input->get("draw"));
      $start = intval($this->input->get("start"));
      $length = intval($this->input->get("length"));


      $query = $this->db->get("administrators");


      $data = [];


      foreach($query->result() as $r) {
           $data[] = array(
                $r->account_no,
                $r->username,
                $r->branch,
                $r->cdate
           );
      }


      $result = array(
               "draw" => $draw,
                 "recordsTotal" => $query->num_rows(),
                 "recordsFiltered" => $query->num_rows(),
                 "data" => $data
            );


      echo json_encode($result);
      exit();
   }

public function update_admin()
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
        $password = $this->input->post('password');
        
        $emailid = $this->input->post('emailid');
        $phoneno = $this->input->post('phoneno');
        
        $allbranch = $this->super_admin_panel_model->get_branches();
        
        foreach ($allbranch as $value) {
            if($value['branch_code']==$branch_name1){ $branch_name = $value['branch_name']; }
        }
        
        $cdate = date("d-m-Y h:i:s A");
        
        if($password !=''){
            
        
        $updatedata = array('name'=>$name,
                        'user_role'=>$role,
                        'profile_picture'=>'',
                        'branch'=>$branchid,
                        'email'=>$emailid,
                        'username'=>$username,
                        'password'=>md5($password),
                        'branch_name'=>$branch_name,
                        'status'=>$status,
                        'account_no'=>$account_no,
                        'cdate'=>$cdate,
                        'phone'=>$phoneno
                    );
                    
}else{
    
      $updatedata = array('name'=>$name,
                        'user_role'=>$role,
                        'profile_picture'=>'',
                        'branch'=>$branchid,
                        'email'=>$emailid,
                        'username'=>$username,
                        'branch_name'=>$branch_name,
                        'status'=>$status,
                        'account_no'=>$account_no,
                        'cdate'=>$cdate,
                        'phone'=>$phoneno
                    );
     
}
        
        $updateid= $this->super_admin_panel_model->update_adminusers($updatedata,$adminid);
        
           echo $message='Admin Updated Successfully';
          $this->session->set_flashdata('success',$message); 
            redirect("super-admin/manage-admin-users");
        
    }
///////////////////////// End Mohit /////////////////



}
?>