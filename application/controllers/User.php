<?php

class User extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

    $this->data['theme'] = 'user';

    $this->data['module'] = 'profile';

    $this->load->model('user_panel_model');  
    $this->load->library('email');

    $this->load->library('form_validation');

    $this->load->helper('file');
        
        
        //     );
    $config['smtp_conn_options'] = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        $this->email->initialize($config);
        // $this->email->set_mailtype("html");
        // $this->email->set_newline("\r\n");     

}

    public function index()

	{

        $client_id = $this->session->userdata['id'];

        $this->data['page'] = 'index';

        $this->data['me'] = $this->user_panel_model->get_me($client_id);        

        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');

      

	}

	public function edit()

	{

        $client_id = $this->session->userdata['id'];

        $this->data['page'] = 'edit';

        $this->data['me'] = $this->user_panel_model->get_me($client_id);        

        $this->data['branchs'] = $this->user_panel_model->get_branches();        

        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');

      

	}

    public function update_user()

    {

        $client_id = $this->session->userdata['id'];

        // var_dump($_POST);

        $insert_data=array(

                  "first_name"=>@$_POST['first_name'],

                  "last_name"=>@$_POST['last_name'],
                  
                  "primary_peso_account"=>@$_POST['primary_peso_account'],

                   "secondary_peso_account"=>@$_POST['secondary_peso_account'],

                    "us_dollar_account"=>@$_POST['us_dollar_account'],

                     "time_deposit_account"=>@$_POST['time_deposit_account'],
                     
                     "fixed_income_account"=>@$_POST['fixed_income_account'],

                        "branch"=>@$_POST['branch'],

                         "account_officer"=>@$_POST['account_officer'],

                          "account_officer_cell"=>@$_POST['account_officer_cell'],

          );

          $update = $this->db->where('id',$client_id)

                                  ->update('clients', $insert_data);

          if(@$update)

            {



             $message="Success! Profile Update";

             $this->session->set_flashdata('edit_success',$message); 

             redirect("edit");

            }

          else

            {

               $message=" Failed To Update Profile!";

             $this->session->set_flashdata('edit_failed',$message); 

             redirect("edit");

            }

      

    }

    public function edit_phone()

  {

        $client_id = $this->session->userdata['id'];


        $this->data['page'] = 'update_phone';

        $this->data['me'] = $this->user_panel_model->get_me($client_id);        

        $this->db->select('id,first_name,last_name,email,status');

        $this->db->from('clients');

        $this->db->where('id', $client_id);

        // $this->db->where('verify', 1);

        $result = $this->db->get()->row_array();

         $this->data['user_email'] = $result['email'];




        if($result) 
        {
            $fotp = rand(11111,99999);

        $data = array(
            'temp_otp' => $fotp,
        );

            $this->db->where('id',$result['id'])->update('clients', $data);

            $message = '<html><head>
                <title>Preferred Client Cell Phone Update</title>
                </head>
                <body>';
            $message .= '<h1>Hi ' . $result['first_name'].' '. $result['last_name']. '!</h1>';
            $message .= '<p>You Request For Change your Cell Number.</p>';
            $message .= '<p>Your Cell Re-verify Code is <b>'.$fotp.'</b> Use to set your new Cell Number!.' ;
            $message .= "</body></html>";

            $mail_message = $message;
            $this->email->to($result['email']);
            $this->email->from();
            $this->email->subject('Preferred Client Update Cell Phone');
            $this->email->message($mail_message);
            $send_mail = $this->email->send();


        $this->load->vars($this->data);

        $this->load->view($this->data['theme'].'/template');

      }

      

  }

  public function update_edit_phone()

    {   
        $client_id = $this->session->userdata['id'];
        $this->form_validation->set_rules('newcell','new cell phone','required'); 
        $this->form_validation->set_rules('concell','confirm cell phone','required');

        if($this->form_validation->run())
        {

            $new_cell=$this->input->post('newcell');

            $con_cell=$this->input->post('concell');
            if($new_cell == $con_cell){

                $fotp = $this->input->post('otp');

                $fnotp = implode("", $fotp);

                $this->db->select('temp_otp,email,status');

                $this->db->from('clients');

                $this->db->where('id', $client_id);

                $this->db->where('verify', 1);

                $result = $this->db->get()->row_array();     

                if($result['temp_otp'] == $fnotp)
                {
                    $data = array(
                    'cellphone' => $new_cell,
                    'last_update' => date("Y-m-d H:i:sO")
                    );
                    $this->db->where('id',$client_id)->update('clients', $data);
                    $this->session->set_flashdata('cp_success','Success! Cell Phone Changed');
                    redirect(base_url().'edit');
                }
                else
                {
                    $this->session->set_flashdata('cp_error','Failed to Change Cell Phone ,Wrong CODE!!');
                    redirect(base_url().'edit');
                }
       
            }else{
                $warning="Confirm Cell Phone doesn't match!";

                $this->session->set_flashdata("cpwarning",$warning);
                redirect(base_url().'edit');
        }
    }
    else{
                $warning="Confirm Cell Phone doesn't match!";

                $this->session->set_flashdata("cpwarning",$warning);
                redirect(base_url().'edit');
    }
}


public function update_image()
{
    $client_id = $this->session->userdata['id'];
    $data = $this->input->post("image");
    $image_array_1 = explode(";", $data);
    $image_array_2 = explode(",", $image_array_1[1]);
    $data = base64_decode($image_array_2[1]);
    $imageName = $client_id."_".time()."_user.png";

    $img_data=array("image"=>@$imageName);
    $update = $this->db->where('id',$client_id)->update('clients', $img_data);
    $imageNamePath = FCPATH.'
    file_put_contents($imageNamePath, $data);

    $this->load->library('image_lib');
    $config['image_library'] = 'gd2';
    $config['source_image'] = FCPATH."
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 75;
    $config['height']       = 50;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();


        exit();

          if(@$update)

            {

             $message="Profile Update Succeeded!";

             $this->session->set_flashdata('edit_success',$message); 

             // redirect("edit");

            }

          else

            {

               $message=" Failed To Update Profile!";

             $this->session->set_flashdata('edit_failed',$message); 

             // redirect("edit");

            }

      

    }
    public function update_imageW()
    {
        $data = $this->input->post("image");
      $image_array_1 = explode(";", $data);
      $image_array_2 = explode(",", $image_array_1[1]);
      $data = base64_decode($image_array_2[1]);
      $imageName_only = strtolower($name)."-".time() . '.png';


   
    $imageName = FCPATH."
  file_put_contents($imageName, $data);
  
       
    $this->load->library('image_lib');
    $config['image_library'] = 'gd2';
    $config['source_image'] = FCPATH.
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = FALSE;
    $config['width']         = 75;
    $config['height']       = 50;
    $this->load->library('image_lib', $config);
    $this->image_lib->resize();

    }


}
?>

