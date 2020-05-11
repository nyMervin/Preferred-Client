<?php
class Home extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'user';
    $this->data['module'] = 'home';
    $this->load->model('user_panel_model');    
}
    public function index()
	{
        $this->data['page'] = 'index';
        $this->data['list'] = $this->user_panel_model->get_rates();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    public function get_rates()
    {
        $list = $this->user_panel_model->get_rates(); 
        $time_rate = $this->db->query("SELECT * FROM `time_deposit_rate` WHERE id = 1")->row_array();
        $time_rate2 = $this->db->query("SELECT * FROM `time_deposit_rate` WHERE id = 2")->row_array();
        
        echo "<div class='row'>
        <div class='col-md-9 col-md-offset-1'>
            <div class='admin_panel'>
                        <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                           <tr>
                              <td colspan='2' align='left' valign='top' class='text-center'>
                                <h4>U.S. Dollar Peso Rate</h4><h5>($10k and above)</h5>
                              </td>
                            </tr>
                           <tr>
                              <td align='left' class='data' width='75%' valign='top'><strong>Buying $</strong></td>
                              <td align='left' class='value' width='25%' valign='top'>₱ ".$list['us_dollar_peso_rate_ew_buying_1y']."</td>
                           </tr>
                           <tr>
                              <td align='left' class='text-center data' valign='top'><strong>Selling $</strong></td>
                              <td align='left' class='text-center value' valign='top'>₱ ".$list['us_dollar_peso_rate_ew_selling_1y']."</td>
                           </tr>
                        </table>
                         <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>";

                         if(!empty($time_rate))
                           {
                              // var_dump($time_rate);
                             
                                 $timee = explode(",", $time_rate["time"]);
                                 $ratee = explode(",", $time_rate["rate"]);
                                 // var_dump($timee[0]); 
                                 // var_dump($ratee[0]); 
                           echo "<tr>
                              <td colspan='2' align='left' valign='top' class='text-center'>
                                <h4>Time Deposit Rates</h4><h5>(".$time_rate['ammount_range'].")</h5>
                              </td>
                           </tr>
                       <tr>
                              <td align='left' class='text-center data' valign='top'><strong>1 Month to ".$timee[0]."Year</strong></td>
                              <td align='left' class='text-center value' valign='top'>".$ratee[0]." %</td>
                           </tr>
                           <tr>
                              <td align='left' class='text-center data' valign='top'><strong> ".$timee[1]." Years</strong></td>
                              <td align='left' class='text-center value' valign='top'> ".$ratee[1]." %</td>
                           </tr>";


                      
                    }

                        echo "</table>
                   <table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>";
                    
                    if(!empty($time_rate2))
                           {
                              // var_dump($time_rate);
                             
                                 $timee2 = explode(",", $time_rate2["time"]);
                                 $ratee2 = explode(",", $time_rate2["rate"]);
                                 // var_dump($timee[0]); 
                                 // var_dump($ratee[0]); 
                            echo "<tr>
                              <td colspan='2' align='left' valign='top' class='text-center'>
                                <h4>Time Deposit Rates</h4><h5>(".$time_rate2['ammount_range'].")</h5>
                              </td>
                           </tr>
                       <tr>
                              <td align='left' class='text-center data' valign='top'><strong>1 Month to ".$timee2[0]." Year</strong></td>
                              <td align='left' class='text-center value' valign='top'>".$ratee2[0]."%</td>
                           </tr>
                           <tr>
                              <td align='left' class='text-center data' valign='top'><strong>".$timee2[1]." Years</strong></td>
                              <td align='left' class='text-center value' valign='top'> ".$ratee2[1]."%</td>
                           </tr>
                           </table>";
        }

        echo "<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0'>
                           <tr>
                              <td colspan='2' width='100%' align='left' valign='top' class='text-center'>
                                <h4>Fixed Income Rate</h4><h5>&nbsp;</h5>
                              </td>
                           </tr>
                           <tr>
                              <td align='left' width='35%' class='data' valign='top'><strong>T-bills</strong></td>
                              <td align='left' width='39%' class='text-center data' valign='top'>1 Year</td>
                              <td align='left' width='26%' class='value' valign='top'>".$list['fixed_income_rate_t-bills_1y']."%</td>
                           </tr>
                        </table>";
      
    }
    public function get_inbox()
    {
      $client_id = @$this->session->userdata['id']; 
      $inbox_count = $this->user_panel_model->get_unread_notifications($client_id);
      $inbox_count_all = $this->user_panel_model->get_all_unread_notifications();


      $_inbox_count = count($inbox_count) + count($inbox_count_all);

      echo count($inbox_count);
    }

    
}

?>
