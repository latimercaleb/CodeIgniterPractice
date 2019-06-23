<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
      // Model is super-clean due to using advanced inheritance from custom core model 
      class Page extends MY_Model{
            public function __construct(){
                  parent::__construct();
                  $this->table_name = 'posts';
                  $this->primary_key = 'id';
                  $this->order_by = 'created_at DESC';
            }

            // public function get_posts(){
            //       $this->db->order_by('id','DESC');
            //       $query = $this->db->get('posts');
            //       return $query->result_array();
            // }

      }
?>
