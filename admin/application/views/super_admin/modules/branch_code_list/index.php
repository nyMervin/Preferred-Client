<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>List All Branches & Branch Codes</h2>
						<h2>&nbsp;</h2>
					</div>
          <p style="padding-right: 20px;">
  
  <button class="btn btn-primary pull-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Add New Branch
  </button>
</p>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form action="<?php echo base_url().'superadmin/branch_code_list/add_new_branch'?>" method="POST">
    <div class="col-md-12">
      <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch Name:</label>
                  <input type="text" name="branch_name" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-3">
                  <div class="create">
                  <label>Branch Code:</label>
                  <input type="number" name="branch_code" required="">
                </div>
               </div>
               <div class="col-md-5 col-md-offset-5">
                  <button class="btn-white" type="submit">Add Branch</button>
               </div>
               
    </div>
    </form>
  </div>
</div>


  <div id="update_branch"></div>
  
          
					<div class="col-md-12 list-app">
            <br>
            <?php  if(@$this->session->flashdata("success")) { ?>
              <div class="alert alert-success alert-dismissible">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <?php echo $this->session->flashdata("success"); ?>
              </div>
              <?php } ?>
              <?php  if(@$this->session->flashdata("failed")) { ?>
              <div class="alert alert-danger alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>    
              <?php echo $this->session->flashdata("failed"); ?>
              </div>
              <?php } ?>
                    	<table id="example" class="table " style="width:100%">
                           <tr>
                              <th>S.NO.</th>
                              <th>Branch Name</th>
                              <th>Branch Code</th>
                              <th>Action</th>
                           </tr>
                           <?php

                           if(!empty($branches))
                           {
                             $n = 1;
                             foreach($branches as $item)
                               { 
                                 // var_dump($item); 
                                 ?>
                                 <?php 
                                 // $old_date = $item['created_on'];
                                 // $old_date_timestamp = strtotime($old_date);
                                 // $new_date = date('F d , Y', $old_date_timestamp); 
                                 // echo $new_date;

                                 ?>
                                    

                                 <tr id="id_<?php echo $item['id']; ?>">
                                   <td><?php echo $n."."; ?></td>
                                   <td><?php echo $item['branch_name']; ?></td>
                                   <td><?php echo $item['branch_code']; ?></td>
                                    <!--<td><?php echo $new_date; ?></td> -->    
                                    <td><a class="updateclass" href="javascript:void(0)" id="<?php echo $item['id']; ?>" >
                                        <i class="fas fa-pencil-alt"></i> Edit</a> 
                                        <a href="javascript:void(0)" id="<?php echo $item['id']; ?>" class="deletebranch">
                                            <i class="far fa-trash-alt" style="font-style: normal!important;">Delete</i>
                                        </a>
                                    </td> 
                                 </tr>
                                 <tr style="height: 25px;">&nbsp;</tr>
                            <?php
                            $n++;  
                              }

                           }

                           ?>
                        </table>
					</div>
			   </div>
            </div>
            
<script type="text/javascript">

$(document).ready(function(){
  $(document).on("click",".updateclass",function(){
      $('#update_branch').show();
    var branchid = this.id;
    
      var dataString =  'branchid='+ branchid;
               
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>superadmin/branch_code_list/get_branch_data",
                           data: dataString,
                           success: function(html) {
                            
                            $('#update_branch').html(html);
                           
                           },
                           beforeSend:function(d){
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                     
  });
  
$(document).on("click",".deletebranch",function(){
      
    var branchid = this.id;
    
      var dataString =  'branchid='+ branchid;
               
                     $.ajax({
                           type: "POST",
                           url: "<?php echo base_url() ?>superadmin/branch_code_list/delete_branch_data",
                           data: dataString,
                           success: function(html) {
                            
                           $('#update_branch').html(html);
                           
                           $('#id_'+branchid).hide();
                           
                           },
                           beforeSend:function(d){
                                    $('#div-item').html("<center><strong style='color:red'><div class='loader'></div>  Please Wait...<br></strong></center>");
                                }

                      });
                     
  });
  
});



</script>