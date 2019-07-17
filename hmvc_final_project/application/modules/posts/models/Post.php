<?php
class Post extends MY_Model{
      public $table_name = 'posts';
      public $primary_key = 'id';
      public $primaryFilter = 'intval';
      public $order_by = '';
      public function __construct(){
            parent::__construct();
      }
      public function get_my_post($poster_id){
            $query = $this->db->select('posts.id AS post_id, posts.poster_id, posts.title, posts.body');
      }
}
?>
