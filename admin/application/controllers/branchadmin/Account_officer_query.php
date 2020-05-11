<?php 
class Account_officer_query extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'branch_admin';
        $this->data['module'] = 'account_officer_query';
        $this->load->model('branch_admin_panel_model');
        ob_start();
    }
   public function index()
    {
        $account_officer = $this->input->post('account_officer');
        $this->data['aolist'] = $this->branch_admin_panel_model->get_account_officer_by_role();
        $this->data['aodatalist'] = $this->branch_admin_panel_model->get_transaction_by_account_officer('1');
        $this->data['page']='index';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }


function get_transaction_by_account_officer(){
        
        $subadminid = $this->input->post('subadminid');

        $subadminlist = $this->branch_admin_panel_model->get_transaction_by_account_officer($subadminid);
       // var_dump($subadminlist);
        $n=1;
        ?>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                           <tr>
                              <th>S.No.</th>
                              <th>Branch Code</th>
							  <th>Name</th>
							  <th>Type</th>
                              <th>Debit Amount </th>
                              <th>Credit Amount</th>
							  <th>Transaction Number</th>
                              <th>Date/Time</th>
                           </tr>
        <?php
        if(count($subadminlist) > 0){
        foreach($subadminlist as $lsit){
        ?>
        
          <tr>
				<td><?php echo $n;?></td>
				<td><?php echo $lsit['branch'];?></td>
				<td><?php echo $lsit["first_name"].' '.$lsit["last_name"];?></td>
				<td><?php echo $lsit['type'];?></td>
				<td><?php echo $lsit['debit_amount'];?></td>
				<td><?php echo $lsit['credit_amount'];?></td>
				<td><?php echo $lsit['transaction_number'];?></td>
				<td><?php echo $lsit['completed_on'];?></td>
        </tr>
         
    <?php
     $n++;
        }
        }
        else { echo '<tr><td colspan="8">NO Result Found.</td></tr>'; }
        
        echo '</table>';
       
    }
    
///////////////////////// End Mohit /////////////////



}
?>