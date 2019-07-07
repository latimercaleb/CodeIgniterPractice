<?php
class Register extends MX_Controller{
      public function __construct(){
            parent::__construct();
      }

      public function index(){
            $data['title'] = 'Register';
            $data['module'] = 'users';
            $data['view_file'] = 'register';
            echo Modules::run('templates/default_layout',$data);
      }
}
?>
