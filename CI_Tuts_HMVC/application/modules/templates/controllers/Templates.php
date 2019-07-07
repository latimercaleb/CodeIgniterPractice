<?php
      // Extends MX for the HMVC pattern
      class Templates extends MX_Controller{
            public function __construct(){
                  parent ::__construct();
            }

            public function one_col($data){
                  $this->load->view('one_col', $data);
            }

            public function two_col($data){
                  $this->load->view('two_col', $data);
            }

            public function three_col($data){
                  $this->load->view('three_col', $data);
            }
      }
?>
