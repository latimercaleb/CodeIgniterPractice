<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
      class Frontend_Controller extends MY_Controller{
            public function __construct(){
                  parent ::__construct();
                  $this->load->model('page');
                  $this->data['posts'] = $this->page->get_posts();
            }
      }
?>
