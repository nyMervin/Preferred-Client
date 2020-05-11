<?php 
class Branch_code_list extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'super_admin';
        $this->data['module'] = 'branch_code_list';
        $this->load->model('super_admin_panel_model');
        ob_start();
    }
    
    public function index()
    {
        $this->data['page']='index';
        $this->data['branches'] = $this->super_admin_panel_model->get_active_branches();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function add_new_branch()
    {
        // var_dump($_POST);
        $branch_array = array(
            'branch_name' => $_POST['branch_name'] , 
            'branch_code' => $_POST['branch_code'] 
        );
        $add = $this->db->insert('branches',$branch_array);
        if($add)
        {
            $message='Success! Branch Added.';
          $this->session->set_flashdata('success',$message); 
            redirect("super-admin/branchs");
        }
        else
        {
            $message='Failed! Branch OR Branch Code is Already Exist  OR The branch is User Before! .';
          $this->session->set_flashdata('failed',$message); 
            redirect("super-admin/branchs");
        }
    }
    
    function get_branch_data(){
        
        $branchid = $this->input->post('branchid');

        $subadminlist = $this->super_admin_panel_model->get_branch_data($branchid);
        ?>
          <form action="<?php echo base_url().'superadmin/branch_code_list/update_branch_data'?>" method="POST">
                <div class="col-md-12">
                            <div class="col-md-5 col-md-offset-3">
                              <div class="create">
                              <label>Branch Name:</label>
                              <input type="text" name="branch_name" id="branch_name" value="<?php echo $subadminlist[0]['branch_name'] ?>" required="">
                            </div>
                           </div>
                           <div class="col-md-5 col-md-offset-3">
                              <div class="create">
                              <label>Branch Code:</label>
                              <input type="number" name="branch_code" id="branch_code" value="<?php echo $subadminlist[0]['branch_code'] ?>" required="">
                              <input type="hidden" name="branch_id" id="branch_id" value="<?php echo $subadminlist[0]['id'] ?>" required="">
                            </div>
                           </div>
                           <div class="col-md-5 col-md-offset-6">
                              <button class="btn-white" type="submit">Update Branch</button>
                           </div>
                           
                </div>
            </form>
    <?php
    }

    public function update_branch_data()
    {
        var_dump($_POST);
        
        $checkbranchcode = $this->super_admin_panel_model->get_branch_data_by_code($_POST['branch_code'],$_POST['branch_id']);
        if(count($checkbranchcode) == '0'){
        $branch_array = array(
            'branch_name' => $_POST['branch_name'] , 
            'branch_code' => $_POST['branch_code'] 
        );
        $update = $this->super_admin_panel_model->update_branch_data($branch_array,$_POST['branch_id']);
        
            $message='Success! Branch Updated.';
          $this->session->set_flashdata('success',$message); 
            redirect("super-admin/branchs");
        }
        else
        {
            $message='Failed! Branch OR Branch Code is Already Exist .';
          $this->session->set_flashdata('failed',$message); 
            redirect("super-admin/branchs");
        }
    }
    
    public function delete_branch_data(){
        
        $branchid = $this->input->post('branchid');
        
        $branch_array = array(
            'status' => '0',
        );
        $update = $this->super_admin_panel_model->delete_branch_data($branch_array,$branchid);
       echo  $message='<div class="alert alert-success alert-dismissible" style="clear: both;">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
              Success! Branch Deleted.              </div>';
        
            
    }
    
    
    
    
    
///////////////////////// End Mohit /////////////////



}
?>