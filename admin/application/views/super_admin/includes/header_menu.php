<div class="col-md-9 no-padding">
         <div class="tabbable tabs-left tabingnew">


             <!-- <ul class="nav nav-tabs">
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">All</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users/admin">Admins</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-chat-and-view">Admins Chat and View</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/chat-only">Admins Chat Only</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users/branch-admin">Branch Sub Admins</a></li>
            <li><a class="logoutt" href="<?php echo base_url()."logout"; ?>">Logout</a></li>
            </ul> -->

            
         	<?php
$result = $_SERVER['REQUEST_URI'];
$getname = explode('/', $result);
if($getname['4']=='home'){
   ?>
   <ul class="nav nav-tabs">
         <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
            <?php
}
if($getname['4']=='manage-admin-users'){

?>

            <ul class="nav nav-tabs">
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">All</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-admin">Admins</a></li>
               <!-- <li><a href="javascript:void(0)">Admins Chat and View</a></li> -->
               <!-- <li><a href="javascript:void(0)">Admins Chat Only</a></li> -->
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-branch-admin">Branch Sub Admins</a></li>
			   <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
<?php }
if($getname['4']=='manage-admin-users-admin'){

?>

            <ul class="nav nav-tabs">
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">All</a></li>
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-admin">Admins</a></li>
               <!-- <li><a href="javascript:void(0)">Admins Chat and View</a></li> -->
               <!-- <li><a href="javascript:void(0)">Admins Chat Only</a></li> -->
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-branch-admin">Branch Sub Admins</a></li>
            <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
<?php }
if($getname['4']=='manage-admin-users-branch-admin'){

?>

            <ul class="nav nav-tabs">
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users">All</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-admin">Admins</a></li>
               <!-- <li><a href="javascript:void(0)">Admins Chat and View</a></li> -->
               <!-- <li><a href="javascript:void(0)">Admins Chat Only</a></li> -->
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/manage-admin-users-branch-admin">Branch Sub Admins</a></li>
            <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
<?php }
if($getname['4']=='branchs'){

?>

            <ul class="nav nav-tabs">
              
            <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
<?php }
if($getname['4']=='admin-approve'){
	?>
	<ul class="nav nav-tabs">
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/admin-approve" class="active">Admins</a></li>
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve-branch-admin">Branch Sub Admins</a></li>
			   <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
            <?php
}
if($getname['4']=='admin-approve-branch-admin'){
   ?>
   <ul class="nav nav-tabs">
               <li><a href="<?php echo base_url(); ?>super-admin/admin-approve" class="active">Admins</a></li>
               <li class="active"><a href="<?php echo base_url(); ?>super-admin/admin-approve-branch-admin">Branch Sub Admins</a></li>
            <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
            <?php
}
if($getname['4']=='create-admin'){
	?>
	<ul class="nav nav-tabs">
         <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
            <?php
}
if($getname['3']==''){
?>

<ul class="nav nav-tabs">
			   <li class="last"><a class="logoutt logout">Logout</a></li>
            </ul>
<?php
}

?>