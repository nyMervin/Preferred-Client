<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content=" ">
<meta name="author" content="">
<title>Prime Client || Super Admin Panel</title>
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/bank//img/favicon.ico">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/super-admin/css/style1.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/super-admin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/super-admin/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bank/super-admin/css/custom-animate.css">

<script src="<?php echo base_url(); ?>assets/bank/js/vendor/jquery-1.12.4.min.js"></script> 

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link href="https://fonts.googleapis.com/css?family=Graduate&display=swap" rel="stylesheet">
</head>

<body style="background: #7a7a7a;">
<!-- Wrapper Start -->
<div class="wrapper"> 
   <!-- Login Section Start -->
   <section class="login-area white-bg">
      <div class="col-md-3">
         <div class="row topsidemenu">
            <div class="col-md-10 col-md-offset-1" style="text-align: center;">
			<a href="http://203.190.153.20/primeclient/admin/"><img src="http://203.190.153.20/primeclient/admin/assets/bank/images/logo.png" alt="Prime Client"></a>
               <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                   <tr>
                     <td align="left" valign="top" style="text-align: center;"><strong id="live_time"><?php echo date('M d Y h:m:s'); ?></strong></td>
                  </tr>
                  <?php

                  date_default_timezone_set('Asia/Kolkata');

                  // var_dump($list);
                  $query = $this->db->query("SELECT * FROM `rates`");
                 // var_dump($this->db->last_query());
                  $rate = $query->row_array();
                  // var_dump($rate);

                  ?>

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
                     <td align="left" valign="top" style="text-align: center;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">


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
                     <td align="left" valign="top"><br>
                        Last Update<br><strong> <?php echo $new_date;?></strong></td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="row">



                        <?php
$result = $_SERVER['REQUEST_URI'];
$getname = explode('/', $result);
if($getname['4']=='home'){
   ?>
   <ul class="sidemenu">
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
            <?php
}
if($getname['4']=='manage-admin-users'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='manage-admin-users-admin'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='manage-admin-users-branch-admin'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='admin-approve'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='admin-approve-branch-admin'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a class="active" href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='create-admin'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a class="active" href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }
if($getname['4']=='branchs'){

?>

            <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a class="active" href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
<?php }

?>



            <!-- <ul class="sidemenu">
               <li><a href="<?php echo base_url(); ?>super-admin/home">Dashboard</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">Manage Admin Users</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve">Query Admin User Approval History</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/create-admin">Create Admin User</a></li>
            <li><a href="<?php echo base_url(); ?>super-admin/branchs">Branches</a></li> -->
            <!-- <li><a href="<?php echo base_url(); ?>logout">Logout</a></li> -->
               
            </ul>
         </div>
      </div>
