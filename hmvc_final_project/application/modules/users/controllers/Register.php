<?php
class Register extends MX_Controller{
      public function __construct(){
            parent::__construct();
            $this->load->model('user'); // Fetch user model from module
      }

      public function index(){
            $this->form_validation->set_rules('firstname','FirstName','trim|required|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('lastname','LastName','trim|required|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('email','Email Address','trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[2]');
            $this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[2]|matches[password]');
            $this->form_validation->set_rules('gender','Gender','trim|required');

            $this->form_validation->set_message('is_unique','The email you are trying to register in already in use');

            if($this->form_validation->run() === FALSE){
                  $data['title'] = 'Register';
                  $data['module'] = 'users';
                  $data['view_file'] = 'register';
                  echo Modules::run('templates/default_layout',$data);
            }else{
                  $email = $this->input->post('email');
                  $firstname = $this->input->post('firstname');
                  $lastname = $this->input->post('lastname');
                  $password= $this->input->post('password');
                  $gender = $this->input->post('gender');

                  $gender == 'Male' ? $profile_pic = 'male.png' : $profile_pic = 'female.png';

                  // Implement bcrypt hashing
                  $this->load->library('bcrypt');
                  $hash = $this->bcrypt->hash_password($password);
                  $userData = array(
                        'email' => $email,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'password' => $hash,
                        'profile_pic' => $profile_pic,
                        'gender' => $gender
                  );

                  $data['insert'] = $this->user->save($userData);
                  if(!empty($data['insert'])){
                        $this->session->set_flashdata('UserRegistered','User has registered');
                        redirect('login');
                  }
            }
      }
}
?>
