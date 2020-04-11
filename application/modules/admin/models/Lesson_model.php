<?php
class Lesson_model extends CI_Model {
public function __construct()
        {
                $this->load->database();
        }

         //-- select function
    function select(){
        $this->db->select();
        $this->db->from('lesson');
        $this->db->order_by('lesson_id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();
        return $query;
    }
    }