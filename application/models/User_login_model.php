<?php 

class User_login_model extends CI_Model

{

    public function set_password($user_id,$password)

   {

        // $result = $this->db->query("UPDATE clients SET password = '".."' ,verify = '1' WHERE id = '".$user_id."'");
        $data = array('password' => md5($password), 'verify' => 1);
        $result = $this->db->where('id',$user_id)->update('clients', $data);

        return $result;        

    }

    public function is_valid_login($email,$password)

   {

        $this->db->select('id,email,status');

        $this->db->from('clients');

        $this->db->where('email', $email);

        $this->db->where('password', md5($password));

        $result = $this->db->get()->row_array();     

        return $result;        

    }    

    public function is_valid_password($id,$password)

    {

        $this->db->select('id,email');

        $this->db->from('clients');

        $this->db->where('id', $id);

        $this->db->where('password', md5($password));

        $result = $this->db->get()->row_array();

        return $result;        

    }

    public function updatepassword($new_pass, $userid){

        

        $data = array(
            'password' => $new_pass
            
            );

            return $this->db->where('id',$userid)

                                    ->update('clients', $data);

        

    }

    public function getcurrentpassword($userid)

    {

        $query = $this->db->where(['id' => $userid])

                                    ->get('clients');

                                    if($query->num_rows() > 0){

                                        return $query->row();

                                    }

    }

                

}

?>