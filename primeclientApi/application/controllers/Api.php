<?php  ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

  class Api extends CI_Controller 
   { 
     public function __construct()
     {
         parent::__construct();
         $this->load->model('apimodel');
		 $this->load->library('twilio');        //  date_default_timezone_set('UTC');
        date_default_timezone_set('Asia/Kolkata');
     }

#####################################PrimeClient App Api Start##########################################
   
   public function sent_sms()
	{
		$this->load->library('twilio');
		// @$code = $_GET['code'];
		// $from = '+15709802063';
		$from = '+12162796694';
		if(@$code == NULL)
		{
			    $to = '+918962334644';
		}
		else
		{
			$to = '+'.$code;
		}
		// $to = '+919617279518';
    // $to = '+639260818949';
		    // $to = '+918962334644';
		$message = 'Preferred Client Transaction OTP is '.rand(11111,99999);
		$response = $this->twilio->sms($from, $to, $message);
		if($response->IsError)
			echo 'Error: ' . $response->ErrorMessage;
		else
			echo 'Sent message to ' . $to.':'.$message;
	}

    public function get_branches()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $result=$this->db->query("SELECT * FROM `branches` WHERE status = 1")->result_array();
    if ($result){

      echo json_encode(array("status"=>"1","data"=>$result));
    }else{
      echo json_encode(array("status"=>"0","message"=>"Failed to get branches!")); 
    }
  }

     public function client_register()
     {
       $json = file_get_contents('php://input');
    
        $data = json_decode($json);
            
        $chreck_email=$data->email;
    

        $get_result=$this->apimodel->checked_email($chreck_email);
    
        if($get_result)
         {
    
          echo json_encode(array("status"=>"0","message"=>$get_result));
         }
        else
        {
          $first_name = @$data->first_name;
          $ccellphone = @$data->cellphone;
          $otp = rand(11111,99999);
          $insert_data=array(
             "first_name"=>$first_name,
              "last_name"=>@$data->last_name,
               "cellphone"=>$ccellphone,
                "email"=>@$data->email,
                 "otp"=>$otp,
                  "primary_peso_account"=>@$data->primary_peso_account,
                   "secondary_peso_account"=>@$data->secondary_peso_account,
                    "us_dollar_account"=>@$data->us_dollar_account,
                     "time_deposit_account"=>@$data->time_deposit_account,
                       "branch"=>@$data->branch,
                        "branch_code"=>@$data->branch,
                         // "created_on"=>date("Y-m-d h:i:s A"),
                         "created_on"=>date("Y-m-d h:i:s A"),
                          "fixed_income_account"=>@$data->fixed_income_acc,
                           "account_officer"=>@$data->account_officer,
                            "account_officer_cell"=>@$data->account_officer_cell,
                             "join_by"=>'Android'
          );

          $from = '+12162796694';
          $to = $ccellphone;
          // $to = $ccellphone;
          $message = 'Hi! '.$first_name.' Your Preferred Client Registration OTP is '.$otp;
          $response = $this->twilio->sms($from, $to, $message);

          $result=$this->db->insert("clients",$insert_data);
          $insert_id = $this->db->insert_id();
          if(@$result)
            {
            	$notifaction = 'Welcome to Preferred Client.';
            	$data = array(
		          'send_to' => $insert_id, 
		          'type' => 'text', 
		          'notification' => $notifaction, 
		          'send_at' => date("Y-m-d h:i:s A")
		      );
            $this->db->insert('notification',$data);
             echo json_encode(array("status"=>"1","message"=>"You have Successfully Registered","data"=>$insert_id));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Registration failed"));
            }
        }
    }


    public function check_reg_otp()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $client_id=@$data->id;
        $otp=@$data->otp;
        $result = $this->db->query("SELECT * FROM clients WHERE id = '".$client_id."' AND otp ='".$otp."'")->row_array();
        if($result)
        {
          $this->db->query("UPDATE `clients` SET `verify` = '1' WHERE id = '".$client_id."'");
            echo json_encode(array("status"=>"1","message"=>"OTP Match"));
        }
        else
        {

            echo json_encode(array("status"=>"0","message"=>"You Have Entered Wrong OTP!"));
        }

    }


    public function set_password()
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json);
        $client_id=@$data->id;
        $password=@md5($data->password);


        try {


        $this->db->query("update clients set password='".$password."' where id='".$client_id."'");
        $this->db->query("update clients set forget_otp='' where id='".$client_id."'");

        echo json_encode(array("status"=>"1","message"=>"You have Successfully Registered"));



        } catch (Exception $e) {

           echo json_encode(array("status"=>"0","message"=>"Registration failed!"));

    }

    }

    public function client_login()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       $email=@$data->email;
       $password=@md5($data->password);
       $device_token=@$data->token;
       $device_type=@$data->device_type;

       
       $data=$this->db->query("SELECT *  FROM clients WHERE email ='".$email."' and password ='".$password."'")->row_array();   
    
       if ($data){
        $login_data = array('device_token' =>@$device_token,"device_type"=>$device_type);
        $this->db->where('id',$data['id'])->update('clients', $login_data);
          echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
       }else{
          echo json_encode(array("status"=>"0","message"=>"You’ve entered a wrong ID number or password. 
Please try again")); 
       }   
    }
    
    public function update_profile()
    {
       $json = file_get_contents('php://input');
    
        $data = json_decode($json);
        $client_id=@$data->id;    
          $insert_data=array(
                  "primary_peso_account"=>@$data->primary_peso_account,
                   "secondary_peso_account"=>@$data->secondary_peso_account,
                    "us_dollar_account"=>@$data->us_dollar_account,
                     "time_deposit_account"=>@$data->time_deposit_account,
                      "fixed_income_account"=>@$data->fixed_income_acc,
                        "branch_code"=>@$data->branch_code,
                         "account_officer"=>@$data->account_officer,
                          "account_officer_cell"=>@$data->account_officer_cell,
          );
          $update = $this->db->where('id',$client_id)
	                              ->update('clients', $insert_data);
          if(@$update)
            {
             echo json_encode(array("status"=>"1","message"=>"Success! Profile Update"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Failed Update Profile!"));
            }
    }
    public function set_image()
    {
       $json = file_get_contents('php://input');
    
        $data = json_decode($json);
        $client_id=@$data->id;
        $image =@$data->image;
        
        if($image=="")
        {
           $full_img_name_post = "";
        }else
        {
        $data_post=base64_decode($image);
        $full_img_name_post = $client_id."_".time()."_user.png";
         $imagename_post = "assets/images/users/".$full_img_name_post;
	   file_put_contents($imagename_post, $data_post);
	   $this->db->query("UPDATE clients SET image = '".$full_img_name_post."' WHERE id = '".$client_id."'");
        }

          
          if(@$image != "")
            {
             echo json_encode(array("status"=>"1","message"=>"Success! Profile Update"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Failed Update Profile!"));
            }
    }
    
    public function update_password()
    {
       $json = file_get_contents('php://input');
        $data = json_decode($json);
        $client_id=@$data->id;
        $oldpass =@$data->oldp;
        $newpass =@$data->newp;
        
        $get_result=$this->apimodel->check_user_password($client_id,$oldpass);
        if(@$get_result)
        {
            $data = array(
            'password' => md5($newpass)
            
            );
            $update = $this->db->where('id',$client_id)
                                    ->update('clients', $data);
                                     
          if(@update)
            {
             echo json_encode(array("status"=>"1","message"=>"Success! Password Update"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Failed to update password!"));
            }
                                    
        }
        else
        {
            echo json_encode(array("status"=>"0","message"=>"Old Password not match!"));
        }
    }
    
    
    public function get_user_info()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id=@$data->id;     
		$data=$this->db->query("SELECT a.*,b.branch_name,b.branch_code FROM `clients` as a,branches as b WHERE a.id ='".$client_id."' AND a.branch = b.branch_code")->row_array();
		if ($data){

		  echo json_encode(array("status"=>"1","data"=>$data));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"Failed to check balance!")); 
		}
	}


    public function get_rates()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       $data=$this->db->query("SELECT * FROM rates")->row_array();   
   
       if ($data){           
          echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
       }else{
          echo json_encode(array("status"=>"0","message"=>"Failed to get rates.")); 
       }
       
       
       
    }
    public function buy_dollar_request()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       
       $client_id=@$data->id;
       $amount=@$data->amount;
       $credit_dollar=@$data->credit_dollar;
       $debit_peso=@$data->debit_peso;
       $request_time=date("Y-m-d h:i:s A");
       $otpid=@$data->otpid;
       $otp=@$data->otp;
       $type='Buy Dollar';

       $check_otp = $this->apimodel->check_t_otp($client_id,$otpid,$type);
       if($check_otp['otp'] == $otp)
       {
       	  $insert_data=array(
             "client_id"=>$client_id,
              "amount"=>$amount,
               "credit_dollar"=>$credit_dollar,
                "debit_peso"=>$debit_peso,
                 "request_time"=>$request_time,
          );
          $result = $this->db->insert("buy_dollar_requests",$insert_data);
          if(@$result)
            {
             echo json_encode(array("status"=>"1","message"=>"You Requested Sussessful!"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Request Failed!"));
            }
       }
       else
       {
       	  echo json_encode(array("status"=>"0","message"=>"You have Entered an Wrong OTP!"));
       }
       
       
       
    }
    public function sell_dollar_request()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       
       $client_id=@$data->id;
       $amount=@$data->amount;
       $debit_dollar=@$data->debit_dollar;
       $credit_peso=@$data->credit_peso;
       $request_time=date("Y-m-d h:i:s A");
       $otpid=@$data->otpid;
       $otp=@$data->otp;
       $type='Sell Dollar';

       $check_otp = $this->apimodel->check_t_otp($client_id,$otpid,$type);
       if($check_otp['otp'] == $otp)
       {
          $insert_data=array(
             "client_id"=>$client_id,
              "amount"=>$amount,
               "debit_dollar"=>$debit_dollar,
                "credit_peso"=>$credit_peso,
                 "request_time"=>$request_time
          );
          $result = $this->db->insert("sell_dollar_requests",$insert_data);
          if(@$result)
            {
             echo json_encode(array("status"=>"1","message"=>"You Requested Sussessful!"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Request Failed!"));
            }
       }
       else
       {
          echo json_encode(array("status"=>"0","message"=>"You have Entered an Wrong OTP!"));
       }
       
       
       
    }
   
    public function get_time_deposit_rate()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       
       
       
       $data=$this->db->query("SELECT * FROM time_deposit_rate")->result_array();   
   
       if ($data){
          echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
       }else{
          echo json_encode(array("status"=>"0","message"=>"Failed to get rates.")); 
       }
       
       
       
    }
   
    public function time_deposit_request()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       
       $client_id=@$data->id;
       $amount=@$data->amount;
       $rate=@$data->rate;
       $debit_peso=@$data->amount;
       $request_time=date("Y-m-d h:i:s A");
       $otpid=@$data->otpid;
       $otp=@$data->otp;
       $type='Time Deposit';

       $check_otp = $this->apimodel->check_t_otp($client_id,$otpid,$type);
       if($check_otp['otp'] == $otp)
       {
          $insert_data=array(
             "client_id"=>$client_id,
              "amount"=>$amount,
               "request_time"=>$request_time,
                "rate"=>$rate,
                 "debit_peso"=>$debit_peso
          );
          $result = $this->db->insert("time_deposit_request",$insert_data);
          if(@$result)
            {
             echo json_encode(array("status"=>"1","message"=>"You Requested Sussessful!"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Request Failed!"));
            }
       }
       else
       {
          echo json_encode(array("status"=>"0","message"=>"You have Entered Wrong OTP!"));
       }     
    }
    public function get_notifications()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);

       $client_id=@$data->id;     
       
       
       // $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') ORDER BY `id` DESC")->result_array();  

       $data=$this->db->query("SELECT a.*,n.* FROM `clients` as a,notification as n WHERE a.id ='".$client_id."' AND n.send_to IN ('".$client_id."','all') AND n.send_at >= a.created_on ORDER BY n.`id` DESC")->result_array(); 


       // var_dump($this->db->last_query());

   
       if ($data){

          echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
       }else{
          echo json_encode(array("status"=>"0","message"=>"You Don't have any transactions !")); 
       }
       
       
       
    }
    public function get_transaction()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);

		$client_id=@$data->id;     

// var_dump($client_id);
		$data=$this->db->query("SELECT * FROM transactions WHERE type IN ('Buy Dollar','Sell Dollar','Time Deposit','Fixed Income') AND client_id = '".$client_id."' ORDER BY completed_on DESC")->result_array(); 
    // var_dump($this->db->last_query());
		if ($data){

		  echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"You Don't have any transactions !")); 
		}
	}
	public function unread_notifications()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);

       $client_id=@$data->id;     
    //   $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') AND read_by NOT IN('".$client_id."') AND status = 0 ")->result_array(); 

       // $data=$this->db->query("SELECT * FROM notification WHERE send_to IN ('".$client_id."','all') AND (read_by !='".$client_id."' and read_by NOT LIKE '%,".$client_id."' and (read_by NOT LIKE '%".$client_id.",' and read_by NOT LIKE '%,".$client_id."') and read_by NOT LIKE '%".$client_id.",%' ) AND status = 0 ORDER BY `send_at` DESC")->result_array();


    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $client_data = $this->db->get()->row_array();


       $data=$this->db->query("SELECT n.* FROM notification  as n WHERE n.send_to IN ('".$client_id."','all') AND (n.read_by !='".$client_id."' and n.read_by NOT LIKE '%,".$client_id."' and (n.read_by NOT LIKE '%".$client_id.",' and n.read_by NOT LIKE '%,".$client_id."') and n.read_by NOT LIKE '%".$client_id.",%' ) AND n.send_at >= '".$client_data['created_on']."' AND n.status = 0 ORDER BY n.send_at DESC")->result_array(); 
      // var_dump($this->db->last_query());
       if ($data){

          echo json_encode(array("status"=>"1","message"=>"Success","data"=>$data));
       }else{
          echo json_encode(array("status"=>"0","message"=>"You Don't have any transactions !")); 
       }
       
       
       
    }
	public function request_balance()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id=@$data->id;
		$check = $this->apimodel->check_balance_request($client_id);
		if($check)
         {
    
          echo json_encode(array("status"=>"0","message"=>$check));
         }
         else
         {
    		$req = array(
    		    'client_id'=> $client_id,
    		    'requested_on'=> date("Y-m-d h:i:s A")
    		    );
    		$query = $this->db->insert('balances_request',$req);
    		if ($query){
    
    		  echo json_encode(array("status"=>"1","message"=>"Balance Requested Success ."));
    		}else{
    		  echo json_encode(array("status"=>"0","message"=>"Failed to Requeste Balance!")); 
    		}
         }
	}
	public function check_balance()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id=@$data->id;     
		$data=$this->db->query("SELECT * FROM balances_request_send WHERE client_id = '".$client_id."' ORDER BY `completed_on` DESC")->row_array();
		if ($data){

		  echo json_encode(array("status"=>"1","message"=>"Success Accounts Balance","data"=>$data));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"Failed to check balance!")); 
		}
	}
	public function read_check_balance()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id=@$data->id;     
		$data=$this->db->query("UPDATE balances_request_send SET status = 1  WHERE client_id = '".$client_id."'");
		$this->db->query("UPDATE balances_request SET status = 1  WHERE client_id = '".$client_id."'");
		if ($data){

		  echo json_encode(array("status"=>"1","message"=>"Read Successfully !!"));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"Failed")); 
		}
	}
	public function read_notification_f1()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id=@$data->id;     
		$data=$this->db->query("UPDATE notification SET status = 1  WHERE send_to = '".$client_id."'");
		if ($data){

		  echo json_encode(array("status"=>"1","message"=>"Read Successfully !!"));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"Failed")); 
		}
	}
	public function read_notification_fall()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id = @$data->id;
    if(!empty($client_id))
    {
      $get_notification = $this->apimodel->get_notification_for_all();
      $read_client[]="";
      if($get_notification['read_by'] == "")
      {
          $read_client = $client_id;
          $data=$this->db->query("UPDATE notification SET read_by = '".$read_client."' WHERE send_to = 'all'");
      }
      else
      {
        $read_client = explode(",",$get_notification['read_by']);
        if(!in_array($client_id,$read_client))
        {
          $read_client[count($read_client)]=$client_id;
          $read_client1 = implode(',',$read_client);
          $data=$this->db->query("UPDATE notification SET read_by = '".$read_client1."' WHERE send_to = 'all'");
        }
      }
      
    // if($get_notification['read_by'] == "")
    // {
    //     $read_client1 = $client_id;
    // }
    // else
    // {
    //     $read_client = explode(",",$get_notification['read_by']);
    //         $read_client[count($read_client)]=$client_id;
    //     $read_client1 = implode(',',$read_client);
    // }
        
    // $data=$this->db->query("UPDATE notification SET read_by = '".$read_client1."' WHERE send_to = 'all'");
    if ($data){

      echo json_encode(array("status"=>"1","message"=>"Read Successfully !!"));
    }else{
      echo json_encode(array("status"=>"0","message"=>"Failed")); 
    }
    }
		
	}
	public function read_notification_fall2()
	{
		$json = file_get_contents('php://input');
		$data = json_decode($json);
		$client_id = @$data->id;
		$get_notification = $this->apimodel->get_notification_for_all();
		if($get_notification['read_by'] == "")
		{
		    $read_client1 = $client_id;
		}
		else
		{
		    $read_client = explode(",",$get_notification['read_by']);
            $read_client[count($read_client)]=$client_id;
    		$read_client1 = implode(',',$read_client);
		}
        
		$data=$this->db->query("UPDATE notification SET read_by = '".$read_client1."' WHERE send_to = 'all'");
		if ($data){

		  echo json_encode(array("status"=>"1","message"=>"Read Successfully !!"));
		}else{
		  echo json_encode(array("status"=>"0","message"=>"Failed")); 
		}
	}
	
	public function get_numbers()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $result=$this->db->query("SELECT * FROM `numbers`")->result_array();
    if ($result){

      echo json_encode(array("status"=>"1","data"=>$result));
    }else{
      echo json_encode(array("status"=>"0","message"=>"Failed to get numbers!")); 
    }
  }
	

   public function fixed_income_request()
    {
       $json = file_get_contents('php://input');
       $data = json_decode($json);
       
       $client_id=@$data->id;
       $amount=@$data->amount;
       $debit_peso=@$data->debit_peso;
       $rate=@$data->rates;
       $request_time=date("Y-m-d h:i:s A");
       $otpid=@$data->otpid;
       $otp=@$data->otp;
       $type='Fixed Income';

       $check_otp = $this->apimodel->check_t_otp($client_id,$otpid,$type);
       if($check_otp['otp'] == $otp)
       {
          $insert_data=array(
             "client_id"=>$client_id,
              "amount"=>$amount,
               "rate"=>$rate,
                "debit_peso"=>$debit_peso,
                 "request_time"=>$request_time
          );
          $result = $this->db->insert("fixed_income_requests",$insert_data);
          if(@$result)
            {
             echo json_encode(array("status"=>"1","message"=>"You Requested Sussessful!"));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Request Failed!"));
            }
       }
       else
       {
        echo json_encode(array("status"=>"0","message"=>"You Don't have any transactions !"));
       }     
       
       
    }



    public function transactions_otp()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $client_id = @$data->id;
    $type = @$data->type;
    $time =date("Y-m-d h:i:s A");
    $otp = rand(11111,99999);

    $get_client=$this->apimodel->get_client($client_id);

  $from = '+12162796694';
	$to = $get_client['cellphone'];
	$message = 'Hi! '.$get_client['first_name'].' Your Preferred Client '.$type.' Transaction OTP is '.$otp;
	$response = $this->twilio->sms($from, $to, $message);

    $otp_data=array(
             "client_id"=>$client_id,
              "t_type"=>$type,
               "otp"=>$otp,
                "request_time"=>$time
          );
          $result=$this->db->insert("otp_transaction",$otp_data);
          $insert_id = $this->db->insert_id();
          if(@$result)
            {
             echo json_encode(array("status"=>"1","message"=>"Your otp sent to ".$to,"data"=>$insert_id));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Request failed"));
            }
  }

  public function resend_transactions_otp()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $client_id = @$data->id;
    $otp_id = @$data->otpid;
    $type = @$data->type;
    $time =date("Y-m-d h:i:s A");
    $totp = rand(11111,99999);


    $udata = array(
            'otp' => $totp,
            'request_time' => $time

            );
    
          $result=$this->db->Where('id',$otp_id);
          $this->db->update('otp_transaction',$udata);
          if(@$result)
            {
              $get_client=$this->apimodel->get_client($client_id);
              $from = '+12162796694';
              $to = $get_client['cellphone'];
              $message = 'Hi! '.$get_client['first_name'].' Your Preferred Client '.$type.' New Transaction OTP is '.$totp;
              $response = $this->twilio->sms($from, $to, $message);
             echo json_encode(array("status"=>"1","message"=>"Resent Successfully","data"=>$otp_id));
            }
          else
            {
              echo json_encode(array("status"=>"0","message"=>"Resent failed"));
            }
  }

  public function forget_password()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $email = @$data->email;

    $cellphone = @$data->cellphone;

    $this->db->from('clients');

        $this->db->where('cellphone', $cellphone);

        $this->db->where('email', $email);
        $result = $this->db->get()->row_array();

        if($result) 
        {
            $fotp = rand(11111,99999);

            $data = array(
                'forget_otp' => $fotp,
            );

            $this->db->where('id',$result['id'])->update('clients', $data);

              $get_client=$this->apimodel->get_client($result['id']);
              $from = '+12162796694';
              $to = $get_client['cellphone'];
              $message = 'Hi! '.$get_client['first_name'].' Your Preferred Client Password Resent Code is '.$fotp;
              $response = $this->twilio->sms($from, $to, $message);
             echo json_encode(array("status"=>"1","message"=>"Forget Code Sent to ".$to,"data"=>$result['id']));
        }
          else
        {
              echo json_encode(array("status"=>"0","message"=>"Failed to send Reset Password!"));
        }
  }
  public function forget_password_send()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $client_id = @$data->id;

    $otp = @$data->otp;

        $this->db->from('clients');
        $this->db->where('id', $client_id);
        $this->db->where('forget_otp', $otp);
        $result = $this->db->get()->row_array();
        if($result) 
        {
             echo json_encode(array("status"=>"1","message"=>"Success ,Set your Password","data"=>$result['id']));
        }
          else
        {
              echo json_encode(array("status"=>"0","message"=>"Wrong Code."));
        }
  }

  public function reset_forget_password()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $client_id = @$data->id;

    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $result = $this->db->get()->row_array();
    if($result) 
    {
      $fotp = rand(11111,99999);
      $data = array(
            'forget_otp' => $fotp,
      );
      $this->db->where('id',$result['id'])->update('clients', $data);
      $get_client=$this->apimodel->get_client($result['id']);
      $from = '+12162796694';
      $to = $get_client['cellphone'];
      $message = 'Hi! '.$get_client['first_name'].' Your Preferred Client New Password Resent Code is '.$fotp;
      $response = $this->twilio->sms($from, $to, $message);
            echo json_encode(array("status"=>"1","message"=>"New Forget Code Send Successfully","data"=>$result['id']));
      }
        else
      {
            echo json_encode(array("status"=>"0","message"=>"Failed to send New Reset Password!"));
      }
  }

  public function number_otp1()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $client_id = @$data->id;
    $cellphone = @$data->cellphone;
    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $result = $this->db->get()->row_array();
    if($result)
    {
       $date = new DateTime($result['last_update']);
       $date->modify("+12 hours");
       $right_time = $date->format("Y-m-d H:i:sO");
       $current_time = date("Y-m-d H:i:sO");
       if($result['last_update'] < $current_time)
       {
         if($right_time <= $current_time)
         {
          $notp = rand(11111,99999);

              $data = array(
                  'temp_otp' => $notp
              );

                $this->db->where('id',$result['id'])->update('clients', $data);
                $from = '+12162796694';
                $to = $cellphone;
                $message = 'Hi! '.$result['first_name'].' Your Preferred Client cellphone Resent Code is '.$notp;
                $response = $this->twilio->sms($from, $to, $message);
               echo json_encode(array("status"=>"1","message"=>"Cellphone Resent Code Successfully","data"=>$result['id']));
         }
         else
         {
          // var_dump($right_time);
          // var_dump($current_time);
            echo json_encode(array("status"=>"2","message"=>"Can not edit your Cellphone Number try after ".$right_time."","data"=>$right_time));
         }
       }
       else
       {
          echo json_encode(array("status"=>"0","message"=>"Failed to send Reset Cellphone!"));
       }
     }
     else
     {
      echo json_encode(array("status"=>"0","message"=>"Failed to send Reset Cellphone!"));
     }

}



  

public function update_number()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $client_id = @$data->id;
    $otp = @$data->otp;
    $cellphone = @$data->cellphone;
    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $this->db->where('temp_otp', $otp);
    $result = $this->db->get()->row_array(); 
    if($result) 
    {
        $data = array(
            'cellphone' => $cellphone,
            'last_update' => date("Y-m-d H:i:sO")
        );
          $this->db->where('id',$result['id'])->update('clients', $data);
          $from = '+12162796694';
          $to = $cellphone;
          $message = 'Hi! '.$result['first_name'].' Your Preferred Client Cellphone Number is Updated !';
          $response = $this->twilio->sms($from, $to, $message);
         echo json_encode(array("status"=>"1","message"=>"Cellphone Resent Code Successfully"));
    }
      else
    {
          echo json_encode(array("status"=>"0","message"=>"Failed to Update Cellphone!"));
    }
  }


  public function number_otp()
  {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $client_id = @$data->id;
    $cellphone = @$data->cellphone;
    $this->db->from('clients');
    $this->db->where('id', $client_id);
    $result = $this->db->get()->row_array();
    if($result)
    {
       $date = new DateTime($result['last_update']);
       $date->modify("+12 hours");
       $right_time = $date->format("Y-m-d H:i:sO");
       $current_time = date("Y-m-d H:i:sO");
       if($result['last_update'] < $current_time OR $result['last_update'] == NULL)
       {
         if($right_time <= $current_time)
         {
          $notp = rand(11111,99999);

              $data = array(
                  'temp_otp' => $notp
              );

                $this->db->where('id',$result['id'])->update('clients', $data);
                $from = '+12162796694';
                $to = $cellphone;
                $message = 'Hi! '.$result['first_name'].' Your Preferred Client cellphone Resent Code is '.$notp;
                $response = $this->twilio->sms($from, $to, $message);
               echo json_encode(array("status"=>"1","message"=>"Cellphone Resent Code Successfully","data"=>$result['id']));
         }
         else
         {
          // $notp = rand(11111,99999);

          //     $data = array(
          //         'temp_otp' => $notp
          //     );

          //       $this->db->where('id',$result['id'])->update('clients', $data);
          //       $from = '+12162796694';
          //       $to = $cellphone;
          //       $message = 'Hi! '.$result['first_name'].' Your Preferred Client cellphone Resent Code is '.$notp;
          //       $response = $this->twilio->sms($from, $to, $message);
          //      echo json_encode(array("status"=>"1","message"=>"Cellphone Resent Code Successfully","data"=>$result['id']));
               echo json_encode(array("status"=>"2","message"=>"Can be edit at ".$right_time."","data"=>$right_time));
         }
       }
       else
       {
          echo json_encode(array("status"=>"2","message"=>"Can be edit at ".$right_time."","data"=>$right_time));
       }
     }
     else
     {
      echo json_encode(array("status"=>"0","message"=>"Failed to send Reset Cellphone!"));
     }

}

#####################################PrimeClient App Api End##########################################


}
 ?>