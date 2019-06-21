<?php
      class Page extends CI_Model{
            public function __construct(){
                  parent::__construct();
            }

            // Method to insert data into posts table
            public function create($data){
                  if($this->db->insert('posts',$this->db->escape_str($data))){
                        return true;
                  }else{
                        return false;
                  }
            }

            public function get_posts(){
                  $this->db->order_by('id','DESC');
                  $query = $this->db->get('posts');
                  return $query->result_array();
            }

      }
?>
