<?php
class Branch_admin_panel_model extends CI_Model
{

    ######################## PRIME CLIENT ##########################


    public function get_all_balance_request($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where b.branch = '".$branch_code['branch_code']."' AND a.client_id = b.id ORDER BY a .`completed_on` DESC");
        $result = $query->result_array();

        return $result; 
    }
    public function get_all_balance_request_by_date($branch_code,$from_date,$to_date)
    {
         $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND b.branch = '".$branch_code['branch_code']."' AND a.client_id = b.id ORDER BY a .`completed_on` DESC");
        $result = $query->result_array();

        return $result; 
    }


    public function get_branches()
    {        
        $query = $this->db->query("SELECT * FROM `branches` WHERE status = 1");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
    public function branch_code()
    {        
        $query = $this->db->query("SELECT b.branch_code FROM  `administrators` AS a ,`branches` AS b WHERE b.branch_code = a.branch AND a.user_role = '".$this->session->userdata('user_role')."' AND ADMINID = '".$this->session->userdata('Admid')."'");
        // var_dump($this->db->last_query());
        $result = $query->row_array();
        return $result;                  
    }
    public function send_user_account_balance($data)
    {
        $query = $this->db->insert('balances_request_send',$data);
        return  $query;
    }
    public function get_account_officer()
    {        
        $query = $this->db->query("SELECT * FROM `account_officer`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_user_by_id($client_id)
    {       
        $query = $this->db->query("SELECT * FROM `clients` WHERE id ='$client_id'");
        $result = $query->row_array();
        return $result;                  
    }

    public function get_user_by_client($client_id)
    {        
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.id = '".$client_id."' AND a.branch = b.branch_code");
        $result = $query->row_array();
        return $result;                  
    }
    public function insert_transaction($data)
    {
        $query = $this->db->insert('transactions',$data);
        return  $query;
    }
    public function chnage_user_status($updatedata,$id)
    {       
        $this->db->Where('id',$id);
        $this->db->update('clients',$updatedata);

        /*$query = $this->db->query("UPDATE administrators set status='0' where ADMINID='adminid' ");
        $result = $query->result_array();
        return $result; */                 
    }
    public function get_balance_request($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`requested_on` DESC");
        $result = $query->result_array();
                // var_dump($this->db->last_query());

        return $result; 
    }
    public function buy_dollar($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0 AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`request_time` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function sell_dollar($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `sell_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0 AND b.branch = '".$branch_code['branch_code']."'");
        $result = $query->result_array();
        return $result; 
    }
    public function get_time_deposit_requests($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`request_time` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_user($branch_code)
    {        
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = '".$branch_code['branch_code']."' AND a.branch = b.branch_code");
        $result = $query->result_array();
        return $result;                  
    }
    public function send_for_one($data)
    {
        $query = $this->db->insert('notification',$data);
        return  $query;
    }
    public function get_all_buy_dollar($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_sell_dollar($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_fixed_income_requests($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `fixed_income_requests` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`request_time` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_fixed_income($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where b.branch = '".$branch_code['branch_code']."' AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_fixed_income_date_filter($branch_code,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE b.branch = '".$branch_code['branch_code']."' AND a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        // var_dump($this->db->last_query());
        return $result;                  
    }
    public function get_buy_query_by_depositor_date_filter($app_user,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b WHERE a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59'  AND type IN('Buy Dollar')  AND client_id = '".$app_user."' AND a.client_id = b.id ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_sell_query_by_depositor_date_filter($app_user,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b WHERE a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59'  AND type IN('Sell Dollar')  AND client_id = '".$app_user."' AND a.client_id = b.id ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_time_deposit_branch($branch_code)
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_time_deposit_date_filter($branch_code,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND a.type = 'Time Deposit' AND b.branch = '".$branch_code['branch_code']."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_branch_user($branch_code,$client_id)
    {        
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.`id` = '".$client_id."' AND a.`branch` = '".$branch_code['branch_code']."' AND a.branch = b.branch_code");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_all_time_deposit_date_filter($branch_code,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.branch,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request` as a,`clients` as b Where status = 1 AND a.client_id = b.id AND b.branch = '".$branch_code['branch_code']."' AND a.requested_on >= '".$from_date."' AND a.requested_on <= '".$to_date." 23:59:59' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;          
    }
    
    public function get_account_officer_by_role()
    {       
        $query = $this->db->query("SELECT * FROM `administrators` WHERE user_role !='3' ");
        $result = $query->result_array();
        return $result;                  
    }
    
    public function get_transaction_by_account_officer($adminid)
    {   
        $query = $this->db->query("SELECT t.*,c.first_name,c.last_name,c.branch FROM `transactions` as t,clients as c   WHERE c.id=t.client_id and  t.completed_by = '$adminid' ORDER BY id DESC");
        $result = $query->result_array();
        return $result;                  
    }
    
    
    
    
################################################ BRANCH ADMIN ########################################    
    public function get_s_notification($client_id)
    {   
        $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') AND (read_by !='".$client_id."' and read_by NOT LIKE '%,".$client_id."' and (read_by NOT LIKE '%".$client_id.",' and read_by NOT LIKE '%,".$client_id."') and read_by NOT LIKE '%".$client_id.",%' ) AND status = 0 ORDER BY `send_at` DESC")->result_array();
        return $data;                  
    }
}
?>