<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
      class MY_Model extends CI_Model{
            public $table_name = '';
            public $primary_key = '';
            public $primaryFilter = 'intval';
            public $order_by = '';

            public function __construct(){
                  parent ::__construct();
            }

            public function find($ids=FALSE){
                  // If there is a single id, only a single record should be returned
                  $single = $ids == FALSE || is_array($ids) ? FALSE : TRUE;
                  if($ids !== FALSE){
                        is_array($ids) || $ids= array($ids);
                        $filter = $this->primaryFilter;
                        $ids = array_map($filter,$ids);
                        $this->db->where_in($this->primary_key, $ids);
                  }

                  if(!empty($this->order_by)){
                        $this->db->order_by($this->order_by);
                  }
                  $single == FALSE || $this->db->limit(1);
                  $method = $single ? 'row_array' : 'result_array';
                  return $this->db->get($this->table_name) ->$method();
            }

      }
?>
