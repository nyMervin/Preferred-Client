 <div class="tab-content">
               <div class="tab-pane hidan active">
          <div class="col-md-12 text-center">
            <h2>Edit App Users</h2>
            <h2>&nbsp;</h2>
          </div>
               <div class="col-md-1"></div>
          <div class="col-md-10 list-app">
                      <div class="box">
                        <div class="row">
                           <div class="col-md-5">
                              <div class="col-md-6">
                                 <p>Name</p>
                                 <p>Branch</p>
                                 <p>Branch No</p>
                                 <p>Phone</p>
                                 <p>Email</p>
                                 <p>Account Officer</p>
                              </div>
                              <div class="col-md-6">
                                 <p><?php echo $user['first_name']." ".$user['last_name']; ?></p>
                                 <p><?php echo $user['branch_name']; ?></p>
                                 <p><?php echo $user['branch']; ?></p>
                                 <p><?php echo $user['cellphone']; ?></p>
                                 <p><?php echo $user['email']; ?></p>
                                 <p><?php echo $user['account_officer']; ?></p>
                              </div>
                           </div>
                           <div class="col-md-3"></div>
                           <div class="col-md-4">
                              <p>Dollar Account Number</p>
                                 <p><?php echo $user['us_dollar_account']; ?></p>
                                 <p>Peso Account Number</p>
                                 <p><?php echo $user['primary_peso_account']; ?></p>
                                 <p></p>
                                 <p><?php  $status = $user['status'];
                              if($status == '1') { 
                                 echo '<span><button type="button" class="btn btn-success disabled" id="changestatus">Activate</button></span>'; 
                              } 
                             else { 
                                  echo  '<span><button type="button" class="btn btn-danger disabled" id="changestatus">Deactivate</button></span>';
                                 } 
                             ?></p>
                           </div>
                              
                                
                   <tr>
                    <td align="left" valign="top">
                              <a class="btn deactivate  deact_<?php echo $user['id']; ?>" style="float: right;" href="javascript:void(0)"  id="<?php echo $user['id']; ?>" onclick='chnage_status_admin(this.id)'>Deactivate</a>
                            <a class="btn activate act_<?php echo $user['id']; ?>" style="float: right;" href="javascript:void(0)"  id="<?php echo $user['id']; ?>" onclick='chnage_status_admin(this.id)'>Activate</a>
                         </td>
                   </tr>
                        </div>
                     </div>

          </div>
               <div class="col-md-1"></div>
         </div>
            </div>


            