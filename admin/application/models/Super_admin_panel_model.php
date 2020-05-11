<?php
class super_admin_panel_model extends CI_Model
{

    ######################## PRIME CLIENT ##########################

    public function get_branches()
    {        
        $query = $this->db->query("SELECT * FROM `branches`");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
    
    public function get_active_branches()
    {        
        $query = $this->db->query("SELECT * FROM `branches` where status='1'");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
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
     public function update_rates($buying_rate,$selling_rate)
    {  
        date_default_timezone_set('Asia/Kolkata');
        $query = $this->db->query("UPDATE rates SET us_dollar_peso_rate_ew_buying_1y = '".$buying_rate."' , us_dollar_peso_rate_ew_selling_1y = '".$selling_rate."', update_on = '".date('M d Y h:m')."'");
        return $query;                  
    }
    public function get_user()
    {        
        $query = $this->db->query("SELECT * FROM `clients`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_user_by_branch()
    {        
        $query = $this->db->query("SELECT * FROM `clients` WHERE branch = 'Padav'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_user_by_branch_filter($branch,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT * from clients WHERE branch_code ='".$branch."' AND  created_on >= '".$from_date."' AND created_on <= date_add('".$to_date."', INTERVAL 7 DAY)");
        $result = $query->result_array();
        return $result;                  
    }
    public function send_for_one($data)
    {
        $query = $this->db->insert('notification',$data);
        // $insert_id = $this->db->insert_id();
        return  $query;
    }


    public function buy_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0");
        $result = $query->result_array();
        return $result; 
    }
    public function sell_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `sell_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0");
        $result = $query->result_array();
        return $result; 
    }


     public function get_time_deposit_requests()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0");
        $result = $query->result_array();
        return $result; 
    }
    
    public function insert_transaction($data)
    {
        $query = $this->db->insert('transactions',$data);
        return  $query;
    }
    public function get_all_buy_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar'");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_buy_dollar_date_filter($from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Buy Dollar'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_buy_dollar_date_branch_filter($branch,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Buy Dollar' AND branch_code = '".$branch."'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_sell_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar'");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_sell_dollar_date_filter($from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Sell Dollar'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_sell_dollar_date_branch_filter($branch,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Sell Dollar' AND branch_code = '".$branch."'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_time_deposit()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Time Deposit'");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_time_deposit_date_filter($from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Time Deposit'");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_time_deposit_date_branch_filter($branch,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY) AND a.client_id = b.id AND type = 'Time Deposit' AND branch_code = '".$branch."'");
        $result = $query->result_array();
        return $result;                  
    }
     public function get_balance_request()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND status= 0");
        $result = $query->result_array();
        return $result; 
    }
     public function get_all_balance_request()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id");
        $result = $query->result_array();
        return $result; 
    }
    public function send_user_account_balance($data)
    {
        $query = $this->db->insert('balances_request_send',$data);
        return  $query;
    }
    public function get_query_by_depositor($app_user,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b WHERE a.completed_on >= '".$from_date."' AND a.completed_on <= date_add('".$to_date."', INTERVAL 7 DAY)  AND type IN('Buy Dollar','Sell Dollar')  AND client_id = '".$app_user."' AND a.client_id = b.id");

        $result = $query->result_array();
        return $result;                  
    }


    public function get_all_admin()
    {        
        $query = $this->db->query("SELECT * FROM `administrators` where user_role !='3' order by ADMINID desc");
        $result = $query->result_array();
        return $result;                  
    }

    public function get_admin_details_byid($said)
    {       
        $query = $this->db->query("SELECT * FROM `administrators` where ADMINID ='$said' order by ADMINID desc");
        $result = $query->result_array();
        return $result;                  
    }

    public function chnage_status_admin($updatedata,$adminid)
    {       
        $this->db->Where('ADMINID',$adminid);
        $this->db->update('administrators',$updatedata);

        /*$query = $this->db->query("UPDATE administrators set status='0' where ADMINID='adminid' ");
        $result = $query->result_array();
        return $result; */                 
    }

    public function get_admin($user_role)
    {       
        $query = $this->db->query("SELECT * FROM `administrators` where user_role ='$user_role' and user_role !='3' order by ADMINID desc");
        $result = $query->result_array();
        return $result;                  
    }

    public function get_last_adminuserid()
    {        
        $query = $this->db->query("SELECT ADMINID FROM `administrators` order by ADMINID desc");
        $result = $query->result_array();
        return $result;                  
    }

    public function add_admin($data)
    {
        $query = $this->db->insert('administrators',$data);
        // $insert_id = $this->db->insert_id();
        return  $query;
    }


    public function get_admin_history_byid($adminid)
    {   

        $query = $this->db->query("SELECT a.*,b.username,b.branch FROM `transactions` as a,`administrators` as b Where a.completed_by = b.ADMINID AND a.completed_by ='$adminid'");

        //$query = $this->db->query("SELECT * FROM `transactions` where completed_by ='$adminid' ");
        $result = $query->result_array();
        return $result;                  
    }


    public function get_branch_subadminid($subadminid)
    {        
        $query = $this->db->query("SELECT branch FROM `administrators` where ADMINID='$subadminid'");
        $result = $query->result_array();
        return $result;                  
    }

    public function get_autocomplete($search_data)
    {
        $this->db->select('*');
        $where = " type like '%$search_data%' or transaction_number like '%$search_data%' or completed_by like '%$search_data%'";
        $this->db->where($where);
    
        return $this->db->get('transactions', 10)->result();
    }
    
    
    public function get_branch_data($bid)
    {        
        $query = $this->db->query("SELECT * FROM `branches` where id='$bid'");
        $result = $query->result_array();
        return $result;                  
    }

    public function update_branch_data($updatedata,$bid)
    {       
        $this->db->Where('id',$bid);
        $this->db->update('branches',$updatedata);
               
    }


    public function get_branch_data_by_code($bcode,$bid)
    {       
        $query = $this->db->query("SELECT * FROM `branches` where branch_code='$bcode' and id !='$bid'");
        $result = $query->result_array();
        return $result; 
               
    }


    public function delete_branch_data($updatedata,$bid)
    {       
        $this->db->Where('id',$bid);
        $this->db->update('branches',$updatedata);
               
    }


    public function update_adminusers($updatedata,$adminid)
    {       
        $this->db->Where('ADMINID',$adminid);
        $this->db->update('administrators',$updatedata);
               
    }


    ##################### END PRIME CLIENT########################### 







	
    
}
?>