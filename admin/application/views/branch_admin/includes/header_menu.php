<!-- <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
			   <li><a class="logoutt logout" href="#" >Logout</a></li>
            </ul> -->

<?php
$result = $_SERVER['REQUEST_URI'];
$getname = explode('/', $result);
if(@$getname['4']=='home'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='balance'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li class="active"><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li class="active"><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='sell-dollar'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='time-deposit'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='fixed-income'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='create-notification-for-one'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='create-notification-for-all'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar-query-by-depositors'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar-query-by-depositors-date'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='sell-dollar-query-depositors'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='sell-dollar-query-by-depositors-date'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='time-deposit-queries'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='time-deposit-queries-by-depositor-date'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='fixed-income-queries-all'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='fixed-income-queries-by-branch'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='account-officer-query'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='balances-request'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='balances-request-query-deposit-by-date'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='branch-user'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='branch-user-edit'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='branch-user-edit-user')
{

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."branch-admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }

?>