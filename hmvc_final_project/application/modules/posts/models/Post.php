<?php
class Post extends MY_Model{
      public $table_name = 'posts';
      public $primary_key = 'id';
      public $primaryFilter = 'intval';
      public $order_by = '';
      public function __construct(){
            parent::__construct();
      }
}
?>
