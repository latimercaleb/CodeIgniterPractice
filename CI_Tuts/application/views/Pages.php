<?php
      class Pages extends CI_Controller{
            public function __contruct(){
                  parent::__contstruct();
            }
            public function index(){
                  // echo "hello world!";
                  $this->load->view(); 
            }
      }
?>
