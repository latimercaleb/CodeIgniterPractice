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

            public function find_by($key, $val=FALSE, $orwhere=FALSE, $single=FALSE){
                  if(!is_array($key)){
                        $this->db->where(htmlentities($key), htmlentities($val));
                  }else{
                        $key = array_map('htmlentities', $key);
                        $where_method = $orwhere == TRUE ? 'or_where' : 'where';
                        $this->db->$where_method($key);
                  }
                  $single == FALSE || $this->db->limit(1);
                  $method = $single ? 'row_array' : 'result_array';
                  return $this->db->get($this->table_name) ->$method();
            }

            public function get_assoc($ids = FALSE){
                  $result = $this->find($ids);
                  if($ids != FALSE && !is_array($ids)){
                        $result = array($result);
                  }

                  $data = $this->to_assoc($result);
                  return $data;
            }

            public function to_assoc($result=array()){
                  $data = array();
                  if(count($result) > 0){
                        foreach($result as $row){
                              $tmp = array_values(array_slice($row,0,1));
                              $data[$tmp[0]] = $row;
                        }
                  }
                  return $data;
            }

            public function save($data, $id=FALSE){
                  if($id == FALSE){
                        // Insert case
                        $this->db->set($data)->insert($this->table_name);
                  }else{
                        // Update case
                        $filter = $this->primaryFilter;
                        $this->db->set($data)->where($this->primary_key, $filter($id))->update($this->table_name);
                  }
                  return $id == FALSE ? $this->db->insert_id() : $id;
            }

            public function delete($ids){
                  $filter = $this->primaryFilter;
                  $ids = !is_array($ids) ? array($ids) : $ids;
                  foreach($ids as $id){
                        $id = $filter($id);
                        if($id){
                              $this->db->where($this->primary_key, $id) ->limit(1) -> delete($this->table_name);
                        }
                  }
            }

            public function delete_by($key, $value){
                  if(empty($key)){
                        return false;
                  }
                  $this->db->where(htmlentities($key), htmlentities($value));
            }
      }
?>
