<?php 
class Admin_approve_history extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'super_admin';
        $this->data['module'] = 'admin_approval';
        $this->load->model('super_admin_panel_model');
        ob_start();
    }
    public function index()
    {
        $this->data['page']='index';
        $this->data['list'] = $this->super_admin_panel_model->get_admin('1');
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function admin_history()
    {
        $adminid = $this->input->post('adminlist');

        $this->data['page']='admin-history';
        $this->data['adminhistorylist'] = $this->super_admin_panel_model->get_admin_history_byid($adminid);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function branch_admin()
    {
        $this->data['page']='branch-admin';
        $this->data['list'] = $this->super_admin_panel_model->get_admin('2');
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function branch_admin_history()
    {
        $adminid = $this->input->post('adminlist');

        $this->data['page']='branch-admin-history';
        $this->data['adminhistorylist'] = $this->super_admin_panel_model->get_admin_history_byid($adminid);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function get_branch_subadminid()
    {
        $subadminid = $this->input->post('subadminid');

        
        $subadminlist = $this->super_admin_panel_model->get_branch_subadminid($subadminid);
        echo $subadminlist[0]['branch'];
    }

    public function autocomplete_search()
    {
         
         $search_data = $this->input->post('search_data');
         $result = $this->super_admin_panel_model->get_autocomplete($search_data);
    
         if (!empty($result))
         {
              foreach ($result as $value1):
                   ?>
                   <tr>
                 
                <td align="left" valign="top"><?php echo $value1->type; ?></td>
                <td align="left" valign="top"><?php echo $value1->transaction_number; ?></td>
                <td align="left" valign="top"><?php echo $value1->completed_by; ?></td>
                <td align="left" valign="top">5646</td>
                <td align="left" valign="top"><?php echo $value1->completed_on; ?></td>
               </tr>
               <tr style="height:10px;">&nbsp;</tr>
               <?php
              endforeach;
         }
         else
         {
               echo "<tr><td colspan='7'>NO Result Found.</td></tr>";
         }
     }

    

///////////////////////// End Mohit /////////////////



}
?>