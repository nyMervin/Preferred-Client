<?php 
class Numbers_update extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['theme'] = 'admin';
        $this->data['module'] = 'number_update';
        $this->load->model('admin_panel_model');
        ob_start();
    }
    
    public function bank_phone_number()
    {
        $this->data['page']='bank_phone_number';
        $this->data['bank_phone_number'] = $this->admin_panel_model->get_bank_phone_number();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function account_officer_cell_number()
    {
        $this->data['page']='account_officer_cell_number';
        $this->data['officer_phone_number'] = $this->admin_panel_model->get_account_officer_cell_number();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function inbount_phone_number()
    {
        $this->data['page']='inbount_phone_number';
        $this->data['inbound'] = $this->admin_panel_model->get_inbound_number();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
    public function update_inbount_phone_number()
    {
        $inno = $this->input->post('inbount_phone_number');
        if($inno != "")
        {
        $update_inno = $this->db->query("UPDATE numbers SET phone_number ='".$inno."' WHERE id =1");
        if($update_inno)
        {
            $this->session->set_flashdata('ino_update','Inbound Phone Number Update Successed!'); 
            redirect('admin/update-inbount-phone-number');
        }
        else
        {
            redirect('admin/update-inbount-phone-number');
        }
    }
    else
    {
        $this->session->set_flashdata('ino_update_failed','Inbound Phone Number Update Failed!');
        redirect('admin/update-inbount-phone-number');
    }
    }
     public function update_bank_phone_number()
    {
        $bank_number = $this->input->post('bank_phone_no');
        if($bank_number != "")
        {
        $update_inno = $this->db->query("UPDATE numbers SET phone_number ='".$bank_number."' WHERE id =2");
        if($update_inno)
        {
            $this->session->set_flashdata('bno_update','Bank Phone Number Update Successed!'); 
            redirect('admin/update-bank-phone-number');
        }
        else
        {
            redirect('admin/update-bank-phone-number');
        }
    }
    else
    {
        $this->session->set_flashdata('bno_update_failed','Bank Phone Number Update Failed!');
        redirect('admin/update-bank-phone-number');
    }
    }
    public function update_account_officer_phone_number()
    {
        $aoffc_number = $this->input->post('acc_off_num');
        if($aoffc_number != "")
        {
        $update_inno = $this->db->query("UPDATE numbers SET phone_number ='".$aoffc_number."' WHERE id =3");
        var_dump($this->db->last_query());
        if($update_inno)
        {
            $this->session->set_flashdata('accof_update','Account Officer Phone Number Update Successed!'); 
            redirect('admin/update-account-officer-cell-number');
        }
        else
        {
            redirect('admin/update-account-officer-cell-number');
        }
    }
    else
    {
        $this->session->set_flashdata('accof_update_failed','Account Officer Phone Number Update Failed!');
        redirect('admin/update-account-officer-cell-number');
    }
    }

///////////////////////// End Mohit /////////////////



}
?>