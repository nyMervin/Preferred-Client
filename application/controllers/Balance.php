<?php 
class Balance extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'user';
        $this->data['module'] = 'balance';
        $this->load->model('user_panel_model');
        ob_start();
    }
    public function index()
    {
        $client_id = $this->session->userdata['id'];
        $this->data['page']='index';
        $this->data['me'] = $this->user_panel_model->get_me($client_id);
        $this->data['list'] = $this->user_panel_model->get_rates();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }

    public function request_send()
    {
        $client_id = $this->input->post('id');
        $check = $this->user_panel_model->check_balance_request($client_id);
        if($check)
         {
            $message='You have Already Requested , Wait for Sometime !';

            $this->session->set_flashdata('br_unsuccess',$message); 

            redirect("balance-request");    
          
         }
         else
         {
            $req = array(
                'client_id'=> $client_id,
                'requested_on'=> date("Y-m-d h:i:s A")
                );
            $query = $this->db->insert('balances_request',$req);
            if ($query){
    
              $message='Success, Processing your Request, This may take about 5 to 10 minutes!';

            $this->session->set_flashdata('br_success',$message); 

            redirect("balance-request");
            }else{
                $message='Failed to Requeste Balance!';

            $this->session->set_flashdata('br_failed',$message); 

            redirect("balance-request"); 
            }
         }
        
    }
     
    




}
?>
