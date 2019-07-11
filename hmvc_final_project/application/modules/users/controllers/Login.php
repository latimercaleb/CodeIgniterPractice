<?php
class Login extends MX_Controller{
      public function __construct(){
            parent::__construct();
            $this->load->model('user'); // Fetch user model from module
            // Prevent back button from retaining session cache, issue with CGI script ignore for now
            // $this->output->set_header('Last Modified:'.gmdate('D, d M Y H:i:s').'GMT');
            // $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            // $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
            // $this->output->set_header('Pragma: no-cache');
            $this->load->library('MY_form_validation');
      }

      public function index(){
            $this->form_validation->set_rules('login_email', 'Email ID', 'trim|valid_email|callback_login_check');
            $this->form_validation->set_rules('login_password','Password','trim|required');
            if($this->form_validation->run($this)===FALSE){
                  $data['title'] = 'Login';
                  $data['module'] = 'users';
                  $data['view_file'] = 'login';
                  echo Modules::run('templates/default_layout',$data);
            }else{
                  // echo "Already logged in!";
                  redirect('dashboard');
            }
      }

      public function login_check(){
            $email = $this->input->post('login_email');
            $password = $this->input->post('login_password');

            if(empty($email)){
                  $this->form_validation->set_message('login_check', 'Email is Required');
                  return false;
            }

            // Call model to authenticate
            $data['userData'] = $this->user->find_by('email', $email, NULL, TRUE);
            if(empty($data['userData'])){
                  $this->form_validation->set_message('login_check', 'Invalid email or password');
                  return false;
            }else{
                  $storedPassword = $data['userData']['password'];
                  // Checking the hashed password by using bcrypt library
                  $this->load->library('bcrypt');
                  if($this->bcrypt->check_password($password, $storedPassword)){
                        $newdata = array(
                              'user_id' => $data['userData']['id'],
                              'firstname' => $data['userData']['firstname'],
                              'lastname' => $data['userData']['lastname'],
                              'is_logged_in' =>TRUE,
                        );
                        $this->session->set_userdata($newdata);
                        return true;
                  }else{
                        $this->form_validation->set_message('login_check', 'Invalid email or password');
                        return false;
                  }
            }
      }

      public function logout(){
            $this->session->sess_destroy();
            redirect('login', 'refresh');
      }
}
?>
