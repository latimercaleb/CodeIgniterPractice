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
            // Joining 2 tables here, to sort a user's posts and return them
            $query = $this->db->select('posts.id AS post_id, posts.poster_id, posts.title, posts.category_id, posts.created_at, posts.body, categories.category_name, users.firstname, users.lastname', false) -> from('posts')->join('categories', 'categories.id = posts.category_id')->join('users', 'users.id = posts.poster_id')->where(array('posts.poster_id' => $poster_id)) -> order_by('posts.id','DESC')->get();

            return $query->result_array();

      }

      public function get_single_post($post_id){
            // Joining 2 tables here, to sort a user's posts and return them
            $query = $this->db->select('posts.id AS post_id, posts.poster_id, posts.title, posts.category_id, posts.created_at, posts.body, categories.category_name, users.firstname, users.lastname', false) -> from('posts')->join('categories', 'categories.id = posts.category_id')->join('users', 'users.id = posts.poster_id')->where(array('posts.id' => $post_id)) -> order_by('posts.id','DESC')->get();

            return $query->row_array();

      }

      public function get_latest_post(){
            $query = $this->db->select('posts.id AS post_id, posts.poster_id, posts.title, posts.body, categories.category_name, users.firstname, users.lastname, COUNT(comments.id) AS total_comments', false)->from('posts')->join('categories', 'categories.id = posts.category_id')->join('users','users.id =posts.poster_id')->join('comments','comments.post_id = posts.id','left')->group_by('posts.id')->order_by('posts.id', 'DESC')->get();

            return $query->result_array();
      }
}
?>
