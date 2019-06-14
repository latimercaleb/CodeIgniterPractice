<?php
      class Migrate extends CI_Controller{
            public function  __construct(){
                  parent::__construct();
            }
            // Could load this globally but it makes more sense to do this locally
            public function index(){
                  $this->load->library('migration');
                  if($this->migration->current() == FALSE){
                        show_error($this->migration->error_string());
                  }else{
                        echo 'Migration ok';
                  }
            }
      }
?>
