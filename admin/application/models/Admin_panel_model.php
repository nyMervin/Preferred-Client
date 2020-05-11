<?php
class admin_panel_model extends CI_Model
{

    ######################## PRIME CLIENT ##########################


    public function get_admin()
    {        
        $query = $this->db->query("SELECT * FROM `administrators`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_admin_by_id($adminid)
    {        
        $query = $this->db->query("SELECT * FROM `administrators` WHERE ADMINID = '".$adminid."'");
        $result = $query->row_array();
        return $result;                  
    }
    public function check_admin($branch,$username)
    {        
        $query = $this->db->query("SELECT * FROM `administrators` WHERE branch = '".$branch."' AND username = '".$username."'");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_branches()
    {        
        $query = $this->db->query("SELECT * FROM `branches` WHERE status = 1");
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
    public function get_time_deposit_rates()
    {        
        $query = $this->db->query("SELECT * FROM `time_deposit_rate`");
        // var_dump($this->db->last_query());
        $result = $query->result_array();
        return $result;                  
    }
    public function get_time_rates()
    {        
        $query = $this->db->query("SELECT * FROM `time_deposit_rate`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_inbound_number()
    {        
        $query = $this->db->query("SELECT * FROM `numbers` WHERE id = 1");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_bank_phone_number()
    {        
        $query = $this->db->query("SELECT * FROM `numbers` WHERE id = 2");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_account_officer_cell_number()
    {        
        $query = $this->db->query("SELECT * FROM `numbers` WHERE id = 3");
        $result = $query->row_array();
        return $result;                  
    }
     public function update_rates($buying_rate,$selling_rate)
    {  
        $query = $this->db->query("UPDATE rates SET us_dollar_peso_rate_ew_buying_1y = '".$buying_rate."' , us_dollar_peso_rate_ew_selling_1y = '".$selling_rate."', update_on = '".date("Y-m-d h:i:s A")."'");
        return $query;                  
    }
    public function update_fixed_rates($rate)
    {  
        $query = $this->db->query("UPDATE `rates` SET `fixed_income_rate_t-bills_1y` = '".$rate."' WHERE `rates`.`id` = 1");
        return $query;                  
    }
    public function get_user()
    {        
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.verify = 1 AND a.branch = b.branch_code");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_user_by_client($client_id)
    {        
        $query = $this->db->query("SELECT a.*,b.branch_name FROM `clients` AS a,branches AS b WHERE a.id = '".$client_id."' AND a.branch = b.branch_code");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_users_token()
    {        
        $query = $this->db->query("SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.branch = b.branch_code");
        $result = $query->result_array();
        return $result;                  
    }
    
    public function get_users_token_for_android()
    {        
        $query = $this->db->query("SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type='Android' and a.branch = b.branch_code");
        $result = $query->result_array();
        return $result;                  
    }

    public function get_users_token_not_for_android()
    {        
        $query = $this->db->query("SELECT a.device_token FROM `clients` AS a,branches AS b WHERE a.device_type !='Android' and a.branch = b.branch_code");
        $result = $query->result_array();
        return $result;                  
    }

    public function get_user_by_branch()
    {        
        $query = $this->db->query("SELECT * FROM `clients`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_user_by_branch_filter($branch,$from_date,$to_date)
    {   
        $query = $this->db->query("SELECT * from clients WHERE branch ='".$branch."' AND  created_on >= '".$from_date."' AND created_on <= '".$to_date." 23:59:59'");
        // $query = $this->db->query("SELECT * from clients WHERE branch_code ='".$branch."' AND  created_on BETWEEN ('".$from_date."') AND ('".$to_date."')");
        $result = $query->result_array(); 
        return $result;                  
    }
    public function send_for_one($data)
    {
        $query = $this->db->insert('notification',$data);
        return  $query;
    }


    public function buy_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `buy_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0  ORDER BY a.`id` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function sell_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `sell_dollar_requests` as a,`clients` as b Where a.client_id = b.id AND request_status= 0 ORDER BY a.`id` DESC");
        $result = $query->result_array();
        return $result; 
    }


     public function get_time_deposit_requests()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `time_deposit_request` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC");
        $result = $query->result_array();
        return $result; 
    }

    public function get_fixed_income_requests()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `fixed_income_requests` as a,`clients` as b Where a.client_id = b.id AND request_status = 0 ORDER BY a.`id` DESC");
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
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_buy_dollar_date_filter($from_date,$to_date)
    {   
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC");
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND type = 'Buy Dollar' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_buy_dollar_date_branch_filter($branch,$from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND a.type = 'Buy Dollar' AND b.branch = '".$branch."' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND a.type = 'Buy Dollar' AND b.branch = '".$branch."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_sell_dollar()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_sell_dollar_date_filter($from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND type = 'Sell Dollar' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_sell_dollar_date_branch_filter($branch,$from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND type = 'Sell Dollar' AND branch_code = '".$branch."' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.branch FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND type = 'Sell Dollar' AND branch_code = '".$branch."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_time_deposit()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_fixed_income()
    {
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b Where a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
    public function get_all_fixed_income_date_filter($from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_all_fixed_income_date_branch_filter($branch,$from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND b.branch = ".$branch." AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND b.branch = ".$branch." AND a.client_id = b.id AND a.type = 'Fixed Income' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        // var_dump($this->db->last_query());
        return $result;                  
    }
    public function get_all_time_deposit_date_filter($from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND a.type = 'Time Deposit' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_time_deposit_date_branch_filter($branch,$from_date,$to_date)
    {   
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id AND type = 'Time Deposit' AND branch_code = '".$branch."' ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b  WHERE  a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id AND type = 'Time Deposit' AND branch_code = '".$branch."' ORDER BY a.`completed_on` DESC");
        $result = $query->result_array();
        return $result;                  
    }
     public function get_balance_request()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account,b.secondary_peso_account FROM `balances_request` as a,`clients` as b Where a.client_id = b.id AND a.status= 0 ORDER BY a.`requested_on` DESC");
        $result = $query->result_array();
        return $result; 
    }
     public function get_all_balance_request()
    {
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.client_id = b.id ORDER BY a .`completed_on` DESC");
        $result = $query->result_array();

        return $result; 
    }
    public function get_all_balance_request_by_date($from_date,$to_date)
    {
        // $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."') AND a.client_id = b.id ORDER BY a .`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.branch_code,b.first_name, b.last_name,b.us_dollar_account,b.primary_peso_account FROM `balances_request_send` as a,`clients` as b Where a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59' AND a.client_id = b.id ORDER BY a .`completed_on` DESC");
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
        // $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b WHERE a.completed_on BETWEEN ('".$from_date."') AND ('".$to_date."')  AND type IN('Buy Dollar','Sell Dollar')  AND client_id = '".$app_user."' AND a.client_id = b.id ORDER BY a.`completed_on` DESC");
        $query = $this->db->query("SELECT a.*,b.first_name, b.last_name,b.branch_code,b.us_dollar_account,b.primary_peso_account FROM `transactions` as a,`clients` as b WHERE a.completed_on >= '".$from_date."' AND a.completed_on <= '".$to_date." 23:59:59'  AND type IN('Buy Dollar','Sell Dollar')  AND client_id = '".$app_user."' AND a.client_id = b.id ORDER BY a.`completed_on` DESC");

        $result = $query->result_array();
        return $result;                  
    }

##########################SOCKET####################################


    public function get_s_notification($client_id)
    {   
        $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') AND (read_by !='".$client_id."' and read_by NOT LIKE '%,".$client_id."' and (read_by NOT LIKE '%".$client_id.",' and read_by NOT LIKE '%,".$client_id."') and read_by NOT LIKE '%".$client_id.",%' ) AND status = 0 ORDER BY `send_at` DESC")->result_array();
        return $data;                  
    }







##########################END SOCKET#################################


    ##################### END PRIME CLIENT########################### 







	
    
}
?>