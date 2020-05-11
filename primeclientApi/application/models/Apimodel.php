<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Apimodel extends CI_Model {

#####################################PrimeClient App Api Start##########################################

public function checked_email($chreck_email)
{
    $check_email=$this->db->query("select * from clients where email='".$chreck_email."'")->row_array();
    // var_dump($check_email);
    if(@$check_email)
    {
        $email_status="Email id already exist";
    }
    else
    {
         $email_status=false;
    }


// var_dump($num_status);
    if(@$email_status==false)
    {
        return false;
    }
    else
    {

        return $email_status;
    }

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
public function get_notification_for_all()
{
    $check_note = $this->db->query("SELECT * FROM notification WHERE send_to='all' AND status = 0 ORDER BY `id` DESC")->row_array();
    if(@$check_note)
    {
        $result = $check_note;
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
public function check_user_password($client_id,$oldpass)
{
    $this->db->select('id,email');
    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $this->db->where('password', md5($oldpass));
    $result = $this->db->get()->row_array();
    return $result;        
}


public function get_client($client_id)
{
    $result = $this->db->query("SELECT * FROM clients WHERE id='".$client_id."' AND status = 1")->row_array();
    if(@$result == false)
    {
        return false;
    }
    else
    {

        return $result;
    }

}

public function check_t_otp($client_id,$otpid,$type)
{
    $result = $this->db->query("SELECT * FROM otp_transaction WHERE id = '".$otpid."' AND client_id ='".$client_id."' AND t_type = '".$type."'")->row_array();
    if(@$result == false)
    {
        return false;
    }
    else
    {

        return $result;
    }

}
#####################################PrimeClient App Api End##########################################



}

?>