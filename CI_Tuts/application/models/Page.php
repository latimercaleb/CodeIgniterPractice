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

            public function view_post($id){
                  $query = $this->db->get_where('posts',array('id' =>$id));
                  return $query->row_array(); // returns one result
            }

            public function update_post($data,$id){
                  $this->db->set($this->db->escape_str($data));
                  $this->db->where('id',$id);
                  $this->db->update('posts');
                  if($this->db->affected_rows() > 0){
                        return true;
                  }else{
                        return false;
                  }
            }

            public function delete_post($id){
                  $this->db->where('id',$id);
                  $this->db->delete('posts');
                  if($this->db->affected_rows() > 0){
                        return true;
                  }else{
                        return false;
                  }
            }

      }
?>
