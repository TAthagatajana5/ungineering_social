<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }

    public function fetch_all_statuses() {
       
        
        /*$this->db->query ("SELECT
                    users.name, statuses.status, statuses.date_time
                FROM
                     statuses
                INNER JOIN
                    users
                ON
                    statuses.user_id=users.id
                ORDER BY 
                    statuses.date_time DESC, users.name ASC")*;*/
        
        $this->db->select('*');
        $this->db->from('statuses');
        $this->db->join('users', 'statuses.user_id = users.id');
        $this->db->order_by('statuses.date_time DESC, users.name ASC');
        $query = $this->db->get();
        
       
        
        return $query->result_array();
    }
     public function insert_status($data) {
       $this->db->insert('statuses', $data);
    }
    

}

?>