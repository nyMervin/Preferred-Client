<div class="tab-content">
               <div class="tab-pane hidan active">
          <div class="col-md-12 text-center">
            <?php if($this->session->flashdata('ino_update')) {  ?>
           <div class="alert alert-success"><b><?php echo $this->session->flashdata('ino_update');?></b></div>
        <?php  } ?>
        <?php if($this->session->flashdata('ino_update_failed')) {  ?>
           <div class="alert alert-danger"><b><?php echo $this->session->flashdata('ino_update_failed');?></b></div>
        <?php  } ?>
            <h2>Update Inbound Phone Number</h2>
            <h2>&nbsp;</h2>
          </div>
          <div class="col-md-6 col-md-offset-4">
            <div class="rate-ex">
              <form class="custom-input qrytrs" action="<?php echo base_url().'admin/numbers_update/update_inbount_phone_number'; ?>" method="POST">
                <div class="form-control areaa">
                  <div class="col-md-4" style="padding:0px;">
                    <input type="text" placeholder="+63" style="width: auto;/">
                  </div>
                           <div class="col-md-8" style="padding:0px;">
                              <input type="text" name="inbount_phone_number" value="<?php echo $inbound['phone_number']; ?>"style=" width: auto;/">
                           </div>
                </div>
                  <div class="col-md-8 col-md-offset-1"><button class="btn go_btn" type="submit" name="submit">Update</button></div>
              </form>
            </div>
          </div>
         </div>
            </div>