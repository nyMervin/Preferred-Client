<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Cultura is a Education HTML Template">
<meta name="keywords" content="	classes, college, course, courses, educational, learning, online courses, revolution slider, school, seminar, tutorials, university, workshop">
<meta name="author" content="regaltheme.com">
<title>Prime Client || Admin Panel</title>
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/bank/img/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/style1.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/css/custom-animate.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert/sweetalert.css" />
</head>

<body style="background:#7a7a7a;">
<!-- Wrapper Start -->
<div class="wrapper" style="background:#ffffff; height: 75px;" > 
   <div class="wrapper"> 
   </div>
   <!-- Login Section Start -->
   <section class="login-area white-bg">
      <div class="col-md-3"><div class="col-sp-3" style="position: fixed; width: 25%;z-index: 9999;">
         <div class="row topsidemenu">
            <div class="col-md-10 col-md-offset-1" style="text-align: center;">
               <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/bank/images/logo.png" alt="Prime Client" /></a>
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <?php

                  date_default_timezone_set('Asia/Kolkata');

                  // var_dump($list);
                  $query = $this->db->query("SELECT * FROM `rates`");
                 // var_dump($this->db->last_query());
                  $rate = $query->row_array();
                  // var_dump($rate);

                  ?>
                  <tr>
                     <td align="left" valign="top" style="text-align:center;"><strong id="live_time"><?php echo date('M d Y h:i');?></strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align:center;"><br><strong>U.S. Dollar/Peso Rates</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top">
                     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 70%;">
                           <tr>
                              <td align="left" valign="top">Buying</td>
                              <td align="left" valign="top" style="text-align:right;">₱<?php echo $rate["us_dollar_peso_rate_ew_buying_1y"]; ?></td>
                           </tr>
                           <tr>
                              <td align="left" valign="top" style="text-align:left;">Selling</td>
                              <td align="left" valign="top" style="text-align:right;">₱<?php echo $rate["us_dollar_peso_rate_ew_selling_1y"]; ?></td>
                           </tr>
                        </table></td>
                  </tr>
                  <tr>
                     
                     <td align="left" valign="top" style="text-align:center;"><strong style="display:block;">Time Deposit Rates</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align:left;">
                     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 70%;">


                        <?php
                     $query = $this->db->query("SELECT * FROM `time_deposit_rate`");
                     $time_rate = $query->row_array();
                     if(!empty($time_rate))
                           {
                              // var_dump($time_rate);
                             
                                 $timee = explode(",", $time_rate["time"]);
                                 $ratee = explode(",", $time_rate["rate"]);
                                 // var_dump($timee[0]); 
                                 // var_dump($ratee[0]); 
                                 ?>
                                    
                                 <tr>
                              <td align="left" valign="top" style="text-align:left;"><?php echo $timee[0]; ?> years</td>
                              <td align="left" valign="top" style="text-align:right;"><?php echo $ratee[0]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" valign="top" style="text-align:left;"><?php echo $timee[1]; ?> years</td>
                              <td align="left" valign="top" style="text-align:right;"><?php echo $ratee[1]; ?>%</td>
                           </tr>
                            <?php
                             // }
                           }                     
                     ?>



                        </table></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align:center;"><strong style="display:block;">Fixed Income Rate</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align:center;">
                     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="width: 70%;">
                           <tr>
                              <td align="left" valign="top" style="text-align:left;">T-bills</td>
                              <td align="left" valign="top" style="text-align:center;">1 Years</td>
                              <td align="left" valign="top" style="text-align:right;"><?php echo $rate["fixed_income_rate_t-bills_1y"]; ?>%</td>
                           </tr>
                        </table></td>
                  </tr><?php //echo date('M d Y h:i:s');?>
                  <tr>
                        <?php 
                        $old_date = $rate["update_on"];
                        $old_date_timestamp = strtotime($old_date);
                        $new_date = date('M d, Y h:i:s A', $old_date_timestamp); 
                        ?>
                     <td align="left" valign="top"><br>Last Update :<br><strong><?php echo $new_date;?></strong></td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="row sidebar-scroller" >
            <?php
            $result = $_SERVER['REQUEST_URI'];
            $getname = explode('/', $result);
            if(@$getname['4']=='home'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
			
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3 style="text-align:center;">Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3 style="text-align:center;">Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3 style="text-align:center;">Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "Time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3 style="text-align:center;">Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>


               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
                        
            <?php }
            if(@$getname['4']=='balance'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='sell-dollar'){

            ?>

               <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='time-deposit'){

            ?>

                 <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='fixed-income'){

            ?>

               <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='update-exchange-rate'){

            ?>

            <ul class="sidemenu">
               <li><a class="active" href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='update-time-deposit-rate'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }if(@$getname['4']=='update-fixed-income-rate'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='update-inbount-phone-number'){

            ?>     
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a class="active" href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            <?php }
            if(@$getname['4']=='create-notifaction-for-one'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php }
            if(@$getname['4']=='create-notifaction-for-all'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a class="active" href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='buy-dollar-query-all'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php } if(@$getname['4']=='buy-dollar-query-all-by-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php }
            if(@$getname['4']=='buy-dollar-query-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php }if(@$getname['4']=='buy-dollar-query-by-branch-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php }
            if(@$getname['4']=='sell-dollar-query-all'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }if(@$getname['4']=='sell-dollar-query-by-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='sell-dollar-query-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='sell-dollar-query-by-branch-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='sell-dollar-query-depositor'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='sell-dollar-query-by-depositor'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a class="active" href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='time-deposit-queries-all'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='time-deposit-queries-by-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='fixed-income-queries-all'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a  class="active" href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='fixed-income-queries-by-date-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='fixed-income-queries-by-branch-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='time-deposit-queries-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='time-deposit-queries-by-branch-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='fixed-income-queries-by-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a class="active" href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='balances-request'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='app-user-all'){

            ?>
            <ul class="sidemenu">
               <li class="active"><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='app-user-branch'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='balances-request-query-by-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='app-user-queries-by-branch-date'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='branch-code-list'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>           

            <?php }
            if(@$getname['4']=='update-bank-phone-number'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>            

            <?php }
            if(@$getname['4']=='update-account-officer-cell-number'){

            ?>
            <ul class="sidemenu">
               <li><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-fixed-income-rate"; ?>">Update Fixed Income Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li>
                  <h3>Fixed Income Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income-queries-by-date-branch"; ?>">Query and total all "Fixed Income" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a  href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a class="active" href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
			   <li>&nbsp;</li>
            </ul>
            

            <?php }

            ?>
            <!-- <ul class="sidemenu">
               <li class="active"><a href="<?php echo base_url()."admin/update-exchange-rate"; ?>">Update Exchange Rates</a></li>
               <li><a href="<?php echo base_url()."admin/update-time-deposit-rate"; ?>">Update Time Deposit Rates</a></li>
            <li><a href="<?php echo base_url()."admin/update-inbount-phone-number" ?>">Update Inbound Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/create-notifaction-for-one"; ?>">Create Notifications for one user</a></li>
            <li><a href="<?php echo base_url()."admin/create-notifaction-for-all"; ?>">Create Notification to All Users</a></li>
               <li>
                  <h3>Buy Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-all"; ?>">Query and Total all "Buy Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar-query-branch"; ?>">Query and Total all "Buy Dollar" Transaction By Branch</a></li>
               <li>
                  <h3>Sell Dollar Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-all"; ?>">Query and Total all "sell Dollar" Transaction</a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar-query-branch"; ?>">Query and Total all "sell Dollar" Transaction By Branch</a></li>
            <li><a href="<?php echo base_url()."admin/sell-dollar-query-depositor"; ?>">Query and "Buy Dollar" & "sell Dollar" By a Depositor</a></li>
               <li>
                  <h3>Time Deposit Queries</h3>
               </li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-all"; ?>">Query and Total all "Time Deposit Placement" Transactions</a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit-queries-branch"; ?>">Query and total all "time deposit placement" Transaction by branch</a></li>
               <li><a href="<?php echo base_url()."admin/balances-request"; ?>">Query all Balances Request</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-all"; ?>">List of App User</a></li>
               <li><a href="<?php echo base_url()."admin/app-user-branch"; ?>">List of App User by Branch</a></li>
               <li><a href="<?php echo base_url()."admin/branch-code-list"; ?>">List of Branch Codes</a></li>
               <li><a href="<?php echo base_url()."admin/update-bank-phone-number"; ?>">Update Bank Phone Number</a></li>
               <li><a href="<?php echo base_url()."admin/update-account-officer-cell-number"; ?>">Update Account Officer Cell Number</a></li>
            </ul> -->            
         </div>
      </div></div>