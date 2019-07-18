<?php
class Comment extends MY_Model{
      public $table_name = 'comments';
      public $primary_key = 'id';
      public $primaryFilter = 'intval';
      public $order_by = '';
      public function __construct(){
            parent::__construct();
      }

      public function get_comments($post_id){
            $query = $this->db->select('*')->from('comments')->join('users', 'users.id = comments.commenter_id')->where(array('comments.post_id' => $post_id))->order_by('comments.id', 'DESC')->get();
            return $query->result_array();
      }
}
?>
