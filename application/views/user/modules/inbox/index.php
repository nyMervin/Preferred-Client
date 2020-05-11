<!--Page Container Start Here-->
<section class="user-container">
    <div class="container">
<div class="col-md-12">
<div class="transaction-content">
    <div class="row">
        <div class="col-md-12">
            <div class="user-profile">
              <div class="trans">
                <p>Inbox</p>
              </div>
               <div class="row">
            <div class="col-md-12">
                <div class="table-data">
                    <!-- <div class="widget-container"> -->
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <?php 
                                        // var_dump($list);
                                        if(!empty($list))
                                       {
                                         foreach($list as $item)
                                           { 
                                              // var_dump($item);
                                             ?>
                                    <tr>
                                        <?php 
                                        if(@$item['type'] == 'UER')
                                        {
                                            ?>
                                            <td><b style="color: forestgreen"><?php echo $item['notification'] ;?></b></td>
                                            <?php
                                        }
                                        elseif (@$item['type'] == 'TDR') {
                                          $_time = explode(",", $item['time']);
                                          $_rates = explode(",", $item['rates']);
                                          ?>
                                            <td><b style="color: #591a7c"><?php echo $item['notification'];?></b></td>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <td><?php echo $item['notification']; ?></td>
                                            <?php
                                        }
                                        ?>
                                       
                                        <td><span><?php echo $item['send_at']; ?></span></td>
                                     
                                    </tr>                                             
                                            
                                        <?php
                                          }

                                       }
                                       else
                                       {
                                           ?>
                                       <tr>
                                            <td colspan="7">NO Result Found.</td>
                                         </tr>

                                           <?php
                                       }

                                       ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</section>
<!--Page Container End Here-->
