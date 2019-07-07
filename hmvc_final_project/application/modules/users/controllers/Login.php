<?php
class Login extends MX_Controller{
      public function __construct(){
            parent::__construct();
            // $this->load->model('user'); // Fetch user model from module
      }

      public function index(){
            $data['title'] = 'Login';
            $data['module'] = 'users';
            $data['view_file'] = 'login';
            echo Modules::run('templates/default_layout',$data);
      }
}
?>
