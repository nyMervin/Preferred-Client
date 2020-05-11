            <div class="tab-content">
               <div class="tab-pane hidan active">
                  <div class="col-md-12 text-center">
                  <h3>Query Approval History of Branch Sub Admin</h3>
               </div>
               <form action="<?php echo base_url() ?>super-admin/admin-approve/branch-admin-history" method="post">
               <div class="col-md-4 col-md-offset-4">
                  <div class="create">
                  <label>Admin User<br>Name:</label>
                                    <select name="adminlist" id="adminlist"  style="margin-left: 18px;width: 65%;height: 28px;" required="">
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
                 <div class="col-md-4 col-md-offset-4">
                  <div class="create">
                  <label>Branch No:</label>
                  <input type="text" name="branchno" id="branchno" />
                </div>
                </div>
                <div class="col-md-2 col-md-offset-6">
               <button class="btn-white" type="submit" name="admin_approve">Go</button>
            </div>
         </form>

                </div>
            </div>

<script type="text/javascript">
   
$('#adminlist').on('change', function() {
  var subadminid = this.value;
  //alert(subadminid);
  var dataString =  'subadminid='+ subadminid;
               
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>superadmin/Admin_approve_history/get_branch_subadminid",
                           data: dataString,
                           success: function(html) {
                            

                            $('#branchno').val(html);
                           
                           },
                           beforeSend:function(d){
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                     

});

</script>
