<!--Page Container Start Here-->
<section class="user-container">
    <div class="container">
<div class="col-md-12">
<div class="transaction-content">
    <div class="row">
        <div class="col-md-12">
            <div class="user-profile">
              <div class="trans">
                <p>Transactions History</p>
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
                                        if($item['type'] == 'Buy Dollar')
                                        {
                                            echo "<td>Bought Us Dollars</td>";
                                        }
                                        elseif($item['type'] == 'Sell Dollar')
                                        {
                                            echo "<td>Sell Us Dollars</td>";
                                        }
                                        elseif($item['type'] == 'Time Deposit')
                                        {
                                           echo "<td>Time Deposite</td>";
                                        }
                                        else
                                        {
                                          echo "<td>Fixed Income</td>";
                                        }
                                        ?>
                                        
                                        <td><span>completed on</span>: <?php echo $item['completed_on']; ?></td>
                                        <td><span>Transaction Number</span>: <?php echo $item['transaction_number']; ?></td>
                                        <td>
                                            <?php 
                                        if($item['type'] == 'Buy Dollar')
                                        {
                                            ?>
                                          <p>₱ <?php echo $item['debit_amount']; ?></p>
                                          <p>$ <?php echo $item['credit_amount']; ?></p>
                                        <?php
                                        }
                                        elseif($item['type'] == 'Sell Dollar')
                                        {
                                        ?>
                                            <p>$ <?php echo $item['debit_amount']; ?></p>
                                          <p>₱ <?php echo $item['credit_amount']; ?></p>
                                        <?php
                                        }
                                        elseif($item['type'] == 'Time Deposit')
                                        {
                                          $td = explode(",", $item['rate']);
                                        ?>
                                        <p>For <?php echo $td[0]." Years at ".$td[1]."% Rate"; ?></p>
                                        <?php
                                        }
                                        else
                                        { 
                                        ?>
                                        <p>For <?php echo "1 Years at ".$item['rate']."% Rate"; ?></p>
                                        <?php
                                        }
                                        ?>
                                      </td>
                                    </tr>                                             
                                            
                                        <?php
                                          }

                                       }
                                       else
                                       {
                                           ?>
                                       <tr>
                                            <td colspan="7">No Result Found.</td>
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
