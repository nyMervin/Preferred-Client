<div class="tab-content">
               <div class="tab-pane hidan active">
					<div class="col-md-12 text-center">
						<h2>Create Notification to All Users</h2>
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
							<form class="custom-input" action="<?php echo base_url(); ?>admin/create_notifaction/send_to_all" method="POST">
								<input type="hidden" name="app_user" value="all">
								<div class="form-control">
									<label style="float: left;">Notification</label>
									<textarea placeholder="" rows="5" name="notifaction" required></textarea>
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