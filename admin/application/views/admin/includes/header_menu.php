<!-- <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
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
               <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
            <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='balance'){

?>
<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
             <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            
<?php }
if(@$getname['4']=='buy-dollar'){

?>

            <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
             <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
<?php }
if(@$getname['4']=='sell-dollar'){

?>

            <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
             <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
<?php }
if(@$getname['4']=='time-deposit'){

?>

            <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
             <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
<?php }
if(@$getname['4']=='fixed-income'){

?>

            <div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">
            <ul class="nav nav-tabs">
               <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
               <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
               <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
               <li class="active"><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
             <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
            </ul>
            <?php }
            if(@$getname['4']=='update-exchange-rate'){

            ?>

                        <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            <?php }

            if(@$getname['4']=='update-time-deposit-rate'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>


            <?php }
            if(@$getname['4']=='update-fixed-income-rate'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>


            <?php }
            if(@$getname['4']=='update-inbount-phone-number'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='create-notifaction-for-one'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='create-notifaction-for-all'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='buy-dollar-query-all'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='buy-dollar-query-branch'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='sell-dollar-query-all'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='sell-dollar-query-branch'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='sell-dollar-query-depositor'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='time-deposit-queries-all'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='time-deposit-queries-branch'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='balances-request'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='app-user-all'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='app-user-branch'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='branch-code-list'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='update-bank-phone-number'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='update-account-officer-cell-number'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='buy-dollar-query-all-by-date'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='buy-dollar-query-by-branch-date'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            if(@$getname['4']=='sell-dollar-query-by-date'){

            ?>
            <div class="col-md-9 no-padding">
                     <div class="tabbable tabs-left tabingnew">
                        <ul class="nav nav-tabs">
                           <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                           <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                           <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                         <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                        </ul>
            

            <?php }
            
                        if(@$getname['4']=='sell-dollar-query-by-branch-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='sell-dollar-query-by-depositor'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='time-deposit-queries-by-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='time-deposit-queries-by-branch-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='fixed-income-queries-all'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='fixed-income-queries-by-date-branch'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='fixed-income-queries-by-branch'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='fixed-income-queries-by-branch-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='app-user-queries-by-branch-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }
                        if(@$getname['4']=='balances-request-query-by-date'){

                        ?>
                        <div class="col-md-9 no-padding">
                                 <div class="tabbable tabs-left tabingnew">
                                    <ul class="nav nav-tabs">
                                       <li><a href="javascript:void(0)">Chat<span>Product Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/balance"; ?>">Balances<span>Balance Information</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/buy-dollar"; ?>">Buy Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/sell-dollar"; ?>">Sell Dollar<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/time-deposit"; ?>">Time Deposit<span>&nbsp;</span></a></li>
                                       <li><a href="<?php echo base_url()."admin/fixed-income"; ?>">Fixed Income<span>&nbsp;</span></a></li>
                                     <li class="last"><a class="logoutt logout" href="#" >Logout</a></li>
                                    </ul>
                        

                        <?php }

?>
