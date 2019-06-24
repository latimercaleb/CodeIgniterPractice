<?php
      // Extends MX for the HMVC pattern
      class Posts extends MX_Controller{
            public function __construct(){
                  parent ::__construct();
            }

            public function hello(){
                  echo 'Hello Posts';
                  // $this->load->view('home');
            }
      }
?>
