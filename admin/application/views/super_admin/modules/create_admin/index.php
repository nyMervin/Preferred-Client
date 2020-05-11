       <div class="tab-content">
        <?php  if(@$this->session->flashdata("success")) { ?>
                        <div class="alert alert-success alert-dismissible">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo $this->session->flashdata("success"); ?>
                        </div>
                        <?php } ?>
                        <?php  if(@$this->session->flashdata("failed")) { ?>
                        <div class="alert alert-danger alert-dismissible fade in">
                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
                        <?php echo $this->session->flashdata("failed"); }?>
                        
          <div class="tab-pane hidan active">
                <div class="col-md-12 text-center">
                  <h3>Create Admin Users</h3>
                </div>
                <form action="<?php echo base_url() ?>superadmin/Create_admin/add_admin" method="post">
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin User Name:</label>
                  <input type="text" name="username" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin User Privilage:</label>
                  <select name="status" style=" padding-left:3px; float: right!important;    width: 42%;" required="">
                    <option value=''>Select</option>
                    <option value='1'>Active</option>
                    <option value="0">Deactive</option>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch </label>
                  <select name="branch_name" id="branch_name"  style="padding-left: 3px; float: right!important;   width: 42%;" required="">
                  <option value=''>Select</option>
                  <?php foreach ($branchlist as $blist) { ?>
                    <option value="<?php echo $blist['branch_code'] ?>"><?php echo $blist['branch_name'] ?></option>
                  
                  <?php
                  }
                  ?>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch Number</label>
                  <input type="text" name="branchid" readonly="" id="branchid" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Admin Role:</label>
                  <select name="role" style="float: right!important; padding-left: 3px; width: 42%;" required="">
                    <option value=''>Select</option>
                    <option value='1'>Admin</option>
                    <option value="2">Branch Admin</option>
                  </select>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Account Number</label>
                  <input type="text" name="account_no" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Employee Number</label>
                  <input type="text" name="adminid" readonly="" style="padding-left: 2px;" value="<?php echo $lastuserid[0]['ADMINID']+1; ?>" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Phone Number</label>
                  <input type="text" name="phoneno"  value="" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Employee Email</label>
                  <input type="text" name="emailid" value="" required="" />
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Temporary Password</label>
                  <input type="text" name="password" required="" />
                </div>
               </div>
            <div class="col-md-4 col-md-offset-4">
               <button class="btn-white" type="submit" name="add_admin">Register Admin</button>
            </div>
          </form>
         </div>
      </div>

     
 <script type="text/javascript">
   $('#branch_name').on('change', function() {
  var branchid =  this.value;
  $('#branchid').val(branchid);
});
 </script>
