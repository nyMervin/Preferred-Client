            <div class="tab-content">
               <div class="tab-pane hidan active">
                  <div class="col-md-12 text-center">
                  <h3> Query Approval History of Admin Users</h3>
               </div>
               <form action="<?php echo base_url() ?>super-admin/admin-approve/admin-history" method="post">
               <div class="col-md-4 col-md-offset-4">
                  <div class="create">
                  <label>Admin User<br>Name:</label>
                  <select name="adminlist" id="adminlist"  style="margin-left: 30px;    width: 51%;" required="">
                  <option value=''>Select</option>
                  <?php

                           if(!empty($list))
                           {
                             foreach($list as $item)
                               { 
                                 ?>
                        <option value='<?php echo $item['ADMINID'] ?>'><?php echo $item['username'] ?></option>

                     <?php } } else { echo 'No Data Available!'; }?>
               </select>
                </div>
			   </div>
            <div class="col-md-2 col-md-offset-6">
               <button class="btn-white" type="submit" name="admin_approve">Go</button>
            </div>
         </form>
         </div>
      </div>

<script src="<?php echo base_url(); ?>assets/bank/super-admin/js/select2.min.js"></script>
<!-- <script>
$("#adminlist").select2( {
   placeholder: "Select Admin",
   allowClear: false
   } );
</script> -->