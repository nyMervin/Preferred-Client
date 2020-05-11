<?php
class User_panel_model extends CI_Model
{

    ######################## USER AREA ##########################

    public function get_rates()
    {        
        $query = $this->db->query("SELECT * FROM `rates`");
        // var_dump($this->db->last_query());
        $result = $query->row_array();
        return $result;                  
    }
    public function get_time_rates()
    {        
        $query = $this->db->query("SELECT * FROM `time_deposit_rate`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_me($client_id)
    {        
        // -- $query = $this->db->query("SELECT * FROM `clients` WHERE id = '".$client_id."'");
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` as a,branches as b WHERE a.id ='".$client_id."' AND a.branch = b.branch_code");
        $result = $query->row_array();
        return $result;                  
    }
     public function get_transaction($client_id)
    {
        $data=$this->db->query("SELECT * FROM transactions WHERE type IN ('Buy Dollar','Sell Dollar','Time Deposit','Fixed Income') AND client_id = '".$client_id."' ORDER BY completed_on DESC")->result_array();
        // var_dump($this->db->last_query());
        return $data;   
    }
    public function get_notifications($client_id)
    {
    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $client_data = $this->db->get()->row_array();
       $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') AND send_at >= '".$client_data['created_on']."' ORDER BY `send_at` DESC")->result_array();
       return $data;  
    }
    public function get_unread_notifications($client_id)
    {
       $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."') AND status = 0 ORDER BY `send_at` DESC")->result_array();
       return $data;  
    }
    public function get_all_unread_notifications()
    {
       $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('all') AND status = 0 ORDER BY `send_at` DESC")->result_array();
       return $data;  
    }
     public function get_branches()
    {        
        $query = $this->db->query("SELECT * FROM `branches`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_last_transaction_details($ltid)
    {        
        $query = $this->db->query("SELECT * FROM `otp_transaction`  WHERE id='$ltid'");
        $result = $query->result_array();
        return $result;                  
    }
    
    public function update_last_transaction_otp($updatedata,$tid)
    {       
        $this->db->Where('id',$tid);
        $this->db->update('otp_transaction',$updatedata);
               
    }
    public function check_balance_request($client_id)
{
    $check_request = $this->db->query("SELECT * FROM balances_request WHERE client_id='".$client_id."' AND status = 0")->row_array();
    if(@$check_request)
    {
        $result="You Have Already Requested ! Wait For Sometime !!";
    }
    else
    {
         $result = false;
    }
    if(@$result == false)
    {
        return false;
    }
    else
    {

        return $result;
    }

}


    ##################### USER AREA END ########################## 

    
}
?>