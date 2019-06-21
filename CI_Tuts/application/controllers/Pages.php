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
              // Handling routing is alot more streamlined by passing details here and loading a layout to load all needed view stuff
                  $data['message'] = 'Hello again! From about controller method';
                  $data['title'] = 'Codeigniter| About';
                  $data['content'] = 'about';
                  $this->load->view('Layouts/master_view',$data);
            }

            public function forms(){
              $data['message'] = 'Hello again! Now we are talking forms';
              $data['title'] = 'Codeigniter| Forms';
              $data['content'] = 'Forms';
              $this->load->view('Layouts/master_view',$data);
            }

            public function form_submitted(){
              echo "Form posted";
            }

            public function add_posts(){
              $data['message'] = 'Hello again! Now we are talking forms with php helper';
              $data['title'] = 'Codeigniter| Add Post';
              $data['content'] = 'add_posts';
              $this->load->view('Layouts/master_view',$data);
            }

            public function form_posted (){
              // Form validation loaded locally, could also load it globally in config/autoload.php in the libraries configuration
              $this->load->library('form_validation');
              $this->form_validation->set_rules('title','Title','trim|required|callback_title_check'); // To use xss_clean it must be configured first in config/config.php
              $this->form_validation->set_rules('body','Body','trim|required');

              if($this->form_validation->run() === FALSE){
                // On error from validation, reload form
                $data['title'] = 'Codeigniter| Add Post';
                $data['content'] = 'add_posts';
                $this->load->view('Layouts/master_view',$data);
              }else{
                $title = $this->input->post('title'); // How to extract form field via Codeigniter
                $body = $this->input->post('body');
                $data = array(
                      'title' =>$title,
                      'body' => $body
                );
                $this->load->model('page'); // Load model here or in constructor
                if($this->page->create($data)){
                      $data['title'] = 'Codeigniter| Post Response';
                      $data['content'] = 'form_posted';
                      $this->load->view('Layouts/master_view',$data);
                }else{
                      echo "Segmentation Fault: Post Dumped!";
                }

              }
            }

            public function posts(){
                  $data['title'] = 'Codeigniter| All Posts';
                  $data['content'] = 'posts';
                  $this->load->model('page');
                  $data['get_posts'] = $this->page->get_posts();
                  $this->load->view('Layouts/master_view',$data);
            }

            public function title_check($str){ // Always takes the field value as a param by default
                  if($str =='test'){
                        $this->form_validation->set_message('title_check','This field cannot be test');
                        return false;
                  }else{
                        return true;
                  }
            }
      }
?>
