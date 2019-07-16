<?php
class Category extends MY_Model{
      public $table_name = 'categories';
      public $primary_key = 'id';
      public $primaryFilter = 'intval';
      public $order_by = '';
      public function __construct(){
            parent::__construct();
      }
}
?>
