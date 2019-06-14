<?php
      class Pages extends CI_Controller{
            public function __contruct(){
                  parent::__contstruct();
            }
            public function index(){
                  // echo "hello world!";
                  $data['message'] = 'Hello again!';
                  $data['title'] = 'Codeigniter Prac';
                  $data['content'] = 'home_view';
                  // Can also nest a view from the controller level, these are for nested views
                  // $this->load->view('home_view', $data);
                  // $this->load->view('elements/page_footer');
                  $this->load->view('Layouts/master_view',$data);
            }

            public function about(){
                  // echo "hello world!";
                  $data['message'] = 'Hello again! From about controller method';
                  $data['title'] = 'Codeigniter| About';
                  $data['content'] = 'about';
                  // Can also nest a view from the controller level, these are for nested views
                  // $this->load->view('home_view', $data);
                  // $this->load->view('elements/page_footer');
                  $this->load->view('Layouts/master_view',$data);
            }
      }
?>
