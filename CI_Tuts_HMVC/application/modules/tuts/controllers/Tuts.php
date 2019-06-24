<?php
      // Extends MX for the HMVC pattern
      class Tuts extends MX_Controller{
            public function __construct(){
                  parent ::__construct();
            }

            public function index(){
                  // echo 'Hello world from HMVC pattern';
                  $this->load->view('home');
            }
      }
?>
