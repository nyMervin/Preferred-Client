<?php 
class Get extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_panel_model');
        ob_start();
    }
    public function get_all_clients()
    {

        if(isset($_POST['client'])){


        $results = array('error' => false, 'data' => '');

        $querystr = $_POST['client'];

        if(empty($querystr)){

            $results['error'] = true;

        }else{

            $sql = $this->db->query("SELECT * FROM clients WHERE first_name LIKE '%$querystr%' OR last_name LIKE '%$querystr%' OR id LIKE '%$querystr%'");

            $sqlquery = $sql->result_array();

            // var_dump($sqlquery);

            if(count($sqlquery) > 0){

                foreach ($sqlquery as $key) {
                   
                    $results['data'] .= "

                        <li class='list-gpfrm-list' data-id='".$key['id']."'>".$key['first_name']." ".$key['last_name']." (".$key['id'].")</li>

                    ";
                }

            }

            else{

                $results['data'] = "

                    <li class='list-gpfrm-list'>No User matches</li>

                ";

            }

        }

 

        echo json_encode($results);

    }

  }
  public function get_all_branches()
    {

        if(isset($_POST['branch'])){


        $results = array('error' => false, 'data' => '');

        $querystr = $_POST['branch'];

        if(empty($querystr)){

            $results['error'] = true;

        }else{

            $sql = $this->db->query("SELECT * FROM branches WHERE branch_name LIKE '%$querystr%' OR branch_code LIKE '%$querystr%'");

            $sqlquery = $sql->result_array();

            // var_dump($sqlquery);

            if(count($sqlquery) > 0){

                foreach ($sqlquery as $key) {
                   
                    $results['data'] .= "

                        <li class='list-gpfrm-list' data-branch_code='".$key['branch_code']."'>".$key['branch_name']." (".$key['branch_code'].")</li>

                    ";
                }

            }

            else{
            	// echo "string";

                $results['data'] = " <li class='list-gpfrm-list'>No Branch Maches</li>";

            }

        }

 

        echo json_encode($results);

    }

  }
}