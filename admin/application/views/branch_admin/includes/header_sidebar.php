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
<link href="https://fonts.googleapis.com/css?family=Graduate&display=swap" rel="stylesheet">
</head>

<body style="background:#7a7a7a;">
<!-- Wrapper Start -->
<div class="wrapper"> 
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
                     
                     <td align="left" valign="top" style="text-align: center;"><strong id="live_time"><?php echo date('M d Y h:m');?></strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align: center;"><br><strong>U.S. Dollar/Peso Rates</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td align="left" valign="top" style="text-align: center;">Buying</td>
                              <td align="left" valign="top" style="text-align: center;">₱<?php echo $rate["us_dollar_peso_rate_ew_buying_1y"]; ?></td>
                           </tr>
                           <tr>
                              <td align="left" valign="top" style="text-align: center;">Selling</td>
                              <td align="left" valign="top" style="text-align: center;">₱<?php echo $rate["us_dollar_peso_rate_ew_selling_1y"]; ?></td>
                           </tr>
                        </table></td>
                  </tr>
                  <tr>
                     
                     <td align="left" valign="top" style="text-align: center;"><strong>Time Deposit Rates</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


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
                              <td align="left" valign="top" style="text-align: center;"><?php echo $timee[0]; ?> years</td>
                              <td align="left" valign="top" style="text-align: center;"><?php echo $ratee[0]; ?>%</td>
                           </tr>
                           <tr>
                              <td align="left" valign="top" style="text-align: center;"><?php echo $timee[1]; ?> years</td>
                              <td align="left" valign="top" style="text-align: center;"><?php echo $ratee[1]; ?>%</td>
                           </tr>
                            <?php
                             // }
                           }                     
                     ?>




                        </table></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top" style="text-align: center;"><strong>Fixed Income Rate</strong></td>
                  </tr>
                  <tr>
                     <td align="left" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                              <td align="left" valign="top" style="text-align: center;">T-bills</td>
                              <td align="left" valign="top" style="text-align: center;">1 Years</td>
                              <td align="left" valign="top"><?php echo $rate["fixed_income_rate_t-bills_1y"]; ?>%</td>
                           </tr>
                        </table></td>
                  </tr><?php //echo date('M d Y h:m:s');?>
                  <tr>
                     <?php 
                        $old_date = $rate["update_on"];
                        $old_date_timestamp = strtotime($old_date);
                        $new_date = date('M d, Y h:m:s', $old_date_timestamp); 
                        ?>
                     
                  </tr>
                  <tr>
                      <td align="left" valign="top"><br>Last Update<br><strong><?php echo $new_date;?></strong></td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="row sidebar-scroller">


            <?php
$result = $_SERVER['REQUEST_URI'];
$getname = explode('/', $result);
if(@$getname['4']=='home'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>


               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>



               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='balance'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='sell-dollar'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='time-deposit'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='fixed-income'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='create-notification-for-one'){

?>
<ul class="sidemenu">
               <li><a class="active" href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='create-notification-for-all'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a class="active" href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar-query-by-depositors'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>

<?php }
if(@$getname['4']=='buy-dollar-query-by-depositors-date'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='sell-dollar-query-depositors'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
<?php }
if(@$getname['4']=='sell-dollar-query-by-depositors-date'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
<?php }
if(@$getname['4']=='time-deposit-queries'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a class="active" href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
<?php }
if(@$getname['4']=='time-deposit-queries-by-depositor-date'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a class="active" href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='account-officer-query'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='balances-request'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='balances-request-query-deposit-by-date'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='fixed-income-queries-all'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='fixed-income-queries-by-branch'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='branch-user'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>
            
<?php }
if(@$getname['4']=='branch-user-edit'){

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }
if(@$getname['4']=='branch-user-edit-user')
{

?>
<ul class="sidemenu">
               <li><a href="<?php echo base_url()."branch-admin/create-notification-for-one"; ?>">Create Notification to One User</a></li>
            <li><a href="<?php echo base_url()."branch-admin/create-notification-for-all"; ?>">Create Notification to All Users</a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar-query-by-depositors"; ?>">Query and Total all “Buy Dollar”
Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar-query-depositors"; ?>">Query and Total all “Sell Dollar”
Transactions of Branch  Depositors</a></li>
            <li><a href="<?php echo base_url()."branch-admin/time-deposit-queries"; ?>">Query and Total all “Time Deposit Placement” Transactions of Branch  Depositors</a></li>
               <li><a href="<?php echo base_url()."branch-admin/account-officer-query"; ?>">Query all Transactions of  Branch Depositors by Account Officer</a></li>
               <li><a href="<?php echo base_url()."branch-admin/balances-request"; ?>">Query all Balances Requests of Branch Depositors </a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income-queries-all"; ?>">Query and Total all "Fixed Income" Transactions</a></li>
               <li><a href="<?php echo base_url()."branch-admin/branch-user/"; ?>">List Of Branch App Users</a></li>
               <li><a class="active" href="<?php echo base_url()."branch-admin/branch-user-edit"; ?>">Edit App Users</a></li>
               
            </ul>            
<?php }

?>
           </div>
         </div>
      </div>