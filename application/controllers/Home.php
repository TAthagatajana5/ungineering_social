<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        session_start();
        $this->load->model('status');
        $r = $this->status->fetch_all_statuses();
        $this->load->view('homepage',['data'=>$r]);
     }

    public function status_submit() {

        session_start();
        if (isset($_SESSION['id']) && $_SESSION['id'] != NULL) {
            $user_id = $_SESSION['id'];
        }

       // $hostname = "localhost";
      //  $username = "root";
      //  $db_password = "123456";
       // $db_name = "social_media";

        $response = array();
       
        if (!$this->load->database()) {
            $response['success'] = false;
            $response['message'] = "Connection failed: " . mysqli_connect_error();
            echo json_encode($response);
            exit();
        }

        $status = $_POST['area'];
        //$status = mysqli_real_escape_string($conn, $status);
        //echo"Your status:".$status;
        if ($status == NULL) {
            $response['success'] = false;
            $response['message'] = "status cannot be empty";
            echo json_encode($response);
            exit();
        } else {
            $data = array(
            'status' => $status,
            'user_id' => $user_id,
            );
            $this->load->model('status');
            
            $sql= $this->status->insert_status($data);
            
            if (!$sql) {
                $response['success'] = false;
                $response['message'] = "Error:";
                echo json_encode($response);
                exit();
            }
        }

        //echo"Your status:".$status;
        $response['success'] = true;
        echo json_encode($response);
        mysqli_close();
    }

}
