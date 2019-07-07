<?php
      // Extends MX for the HMVC pattern
      class Tuts extends MX_Controller{
            public function __construct(){
                  parent ::__construct();
            }

            public function index(){
                  // echo 'Hello world from HMVC pattern';
                  $data['module'] = 'tuts';
                  $data['view_file'] = 'home';
                  // echo Modules::run('templates/one_col', $data);
                  echo Modules::run('templates/three_col', $data);// Change view here to change template loaded at render
                  // $this->load->view('home');
            }
      }
?>
