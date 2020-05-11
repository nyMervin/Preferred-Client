
            <div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12">
						<h3 class="admin_heading text-center">Admin User Profile <span><a style="color:#000;" href="manage-admin-users.html"><i class="fa fa-arrow-left"></i></a></span></h3>
					</div>
					<div class="col-md-12 text-center list-app">
					    
					    <div id="editprofile" style="display:none;">
					        
	<form action="<?php echo base_url() ?>superadmin/Manage_admin_users/update_admin" method="post">
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin User Name:</label>
                  <input type="text" name="username" value="<?php echo $list[0]['name'] ?>" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin User Privilage:</label>
                  <select name="status" style=" padding-left:3px; float:right; width:43%;" required="">
                    <option value="">Select</option>
                    <option value="1" <?php if($list[0]['status'] == '1'){ echo 'selected';}?>>Active</option>
                    <option value="0" <?php if($list[0]['status'] == '0'){ echo 'selected';}?>>Deactive</option>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch </label>
                  <select name="branch_name" id="branch_name"  style="padding-left: 3px; float: right; width: 43%;" required="">
                  <option value=''>Select</option>
                  <?php foreach ($branchlist as $blist) { ?>
                    <option value="<?php echo $blist['branch_code'] ?>" <?php if($list[0]['branch'] == $blist['branch_code']){ echo 'selected';}?> ><?php echo $blist['branch_name'] ?></option>
                  
                  <?php
                  }
                  ?>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch Number</label>
                  <input type="text" name="branchid" readonly="" value="<?php echo $list[0]['branch'] ?>" id="branchid" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin Role:</label>
                  <select name="role" style="float: right; padding-left: 3px; width: 43%;" required="">
                    <option value="">Select</option>
                    <option value="1" <?php if($list[0]['user_role'] == '1'){ echo 'selected';}?>>Admin</option>
                    <option value="2" <?php if($list[0]['user_role'] == '2'){ echo 'selected';}?>>Branch Admin</option>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Account Number</label>
                  <input type="text" name="account_no" value="<?php echo $list[0]['account_no'] ?>"  required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Employee Number</label>
                  <input type="text" name="adminid" readonly="" value="<?php echo $list[0]['ADMINID'] ?>"  style="padding-left: 2px;" value="13" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Phone Number</label>
                  <input type="text" name="phoneno"  value="<?php echo $list[0]['phone'] ?>" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Employee Email</label>
                  <input type="text" name="emailid"  value="<?php echo $list[0]['email'] ?>"  required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>New Password</label>
                  <input type="text" name="password" value="" >
                </div>
               </div>
            <div class="col-md-4 col-md-offset-4">
               <button class="btn-white" type="submit" name="update_admin">Update</button>
               <button class="btn-white" type="button" ><a href="<?php echo base_url() ?>super-admin/manage-admin-users">Cancel</a></button>
            </div>
          </form>
          
					    </div>
						<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" id="viewprofile">
						   <tr>
							  <td align="left" valign="top">
								  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
								   <tr>
									  <td align="left" valign="top">Admin Name</td>
									  <td align="left" valign="top">: <?php echo $list[0]['name'] ?></td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Admin Level</td>
									  <td align="left" valign="top">
									  <?php 
									  if($list[0]['user_role'] == 1)
									  { echo "Admin";}
									  else
									  { echo "Branch Admin";}  
									   ?>
									  </td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Branch</td>
									  <td align="left" valign="top">: <?php echo $list[0]['branch_name'] ?></td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Branch No.</td>
									  <td align="left" valign="top">: <?php echo $list[0]['branch'] ?></td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Account No.</td>
									  <td align="left" valign="top">: <?php echo $list[0]['account_no'] ?></td>
								   </tr>
								</table>
							  </td>
							  <td align="left" valign="top">
								  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
								   <tr>
									  <td align="left" valign="top">Employee No.</td>
									  <td align="left" valign="top" >: <?php echo $list[0]['ADMINID'] ?>
                              <input type="hidden" value="<?php echo $list[0]['ADMINID'] ?>" id="<?php echo $list[0]['ADMINID'] ?>" >                  
                             </td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Email</td>
									  <td align="left" valign="top">: <?php echo $list[0]['email'] ?></td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Phone</td>
									  <td align="left" valign="top">: <?php echo $list[0]['phone'] ?></td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">Status</td>
									  <td align="left" valign="top">: 
                              <?php  $status = $list[0]['status'];
                              if($status == '1') { 
                                 echo '<span id="changestatus">Active</span>'; 
                              } 
                             else { 
                                  echo  '<span id="changestatus">Deactivate</span>';
                                 } 
                             ?>
                                
                             </td>
								   </tr>
								   <tr>
									  <td align="left" valign="top">
                              <a class="btn deactivate  deact_<?php echo $list[0]['ADMINID']; ?>" style="float: right;" href="javascript:void(0)"  id="<?php echo $list[0]['ADMINID']; ?>" onclick='chnage_status_admin(this.id)'>Deactivate</a>
                            <a class="btn activate act_<?php echo $list[0]['ADMINID']; ?>" style="float: right;" href="javascript:void(0)"  id="<?php echo $list[0]['ADMINID']; ?>" onclick='chnage_status_admin(this.id)'>Activate</a>
                         </td>
                         <td><a class="btn activate" id="checkedit">Edit</a></td>
								   </tr>
								</table>
							  </td>
						   </tr>
						</table>
					</div>
			   </div>
            </div>

<?php if($list[0]['ADMINID'] !=0){?>
<script type="text/javascript">



$("#checkedit").click(function(){
  $("#editprofile").show();
  $('#viewprofile').hide();
});


     var adid = <?php echo $list[0]['ADMINID'] ?>; 
     var status = <?php echo $list[0]['status'] ?>;
    
                              if(status == '0') { 
                                 $('.deact_'+adid).hide(); 
                                 $('.act_'+adid).show(); 
                                 $('#changestatus').html='Deactivate';
                                } 
                             else { 
                             $('.deact_'+adid).show(); 
                             $('.act_'+adid).hide(); 
                             $('#changestatus').html='Activate';
                            } 

function chnage_status_admin(adminid)
                  {
                      
                     var dataString =  'adminid='+ adminid;
               //alert(dataString);
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>superadmin/Manage_admin_users/chnage_status_admin",
                           data: dataString,
                           success: function(html) {
                           	if(html=='1'){

                              $('#changestatus').html='Deactivate';
                               $('.deact_'+adminid).hide();
                               $('.act_'+adminid).show(); 

                           }else {

                           	$('#changestatus').html='Activate';
                               $('.deact_'+adminid).show();
                               $('.act_'+adminid).hide(); 
                           }
                           location.reload();
                           
                           },
                           beforeSend:function(d){
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                      
            }

</script>
<?php } ?>