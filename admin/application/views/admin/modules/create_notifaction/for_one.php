<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Create Notification to One User</h2>
					</div>
					<div class="col-md-8 col-md-offset-2">
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
						<div class="rate-ex">
							<form class="custom-input notifaction_one" method="POST">
								<div class="form-control">
									<label>App User</label>
									<input type="text" name="app_user" id="app_user" autocomplete="off">
									<ul class="list-gpfrm" id="app_user_search"></ul>
									<!-- <select  name="app_user" id="app_user" style="width: 67%;">
										<option value="">Select User</option>
										<?php

			                           if(!empty($list))
			                           {
			                             foreach($list as $item)
			                               { 
			                                 // var_dump($item); 
			                               	?>
			                              <option value="<?php echo $item['id']; ?>"><?php echo $item['first_name']." ".$item['last_name']."(".$item['id'].") "; ?></option>
			                            <?php
			                              }

			                           }

			                           ?>
									</select> -->
								</div>
								<div class="form-control">
									<label style="float: left;">Notification</label>
									<textarea id="notifaction" placeholder="" rows="5" name="notifaction"></textarea>
								</div>
								<div class="form-control">
									<label>&nbsp;</label>
									<button class="btn" type="submit" name="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
			   </div>
            </div>