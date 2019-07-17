<?php
class Blog extends MX_Controller{
      public function __construct(){
            parent::__construct();
            $this->load->model('post');
            // Prevent back button from retaining session cache
            // $this->output->set_header('Last Modified:'.gmdate('D, d M Y H:i:s').'GMT');
            // $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
            // $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
            // $this->output->set_header('Pragma: no-cache');
      }

      public function add_post(){
            if($this->session->userdata('is_logged_in') == FALSE){
                  redirect('login');
            }else{
                  $this->form_validation->set_rules('title','Title','trim|required|min_length[5]|max_length[150]');
                  $this->form_validation->set_rules('body','Body','trim|required|min_length[5]|max_length[500]');
                  $this->form_validation->set_rules('category','Category','required');

                  if($this->form_validation->run() === FALSE){
                        $data['title'] = 'Add Post | '. $this->session->userdata('firstname');
                        $data['module'] = 'posts';
                        $data['view_file'] = 'add_post';
                        echo Modules::run('templates/user_layout', $data);
                  }else{
                        $category_id = $this->input->post('category');
                        $poster_id = $this->input->post('poster_id');
                        $title = $this->input->post('title');
                        $body = $this->input->post('body');
                        $post_data = array(
                              'category_id' => $category_id,
                              'poster_id' => $poster_id,
                              'title' => $title,
                              'body' => $body
                        );

                        $data['post_data'] = $this->post->save($post_data);
                        if(!empty($data['post_data'])){
                              $this->session->set_flashdata('PostAdded', 'A new post has been added');
                              redirect('my_post');
                        }else{
                              // In prod, always use flashdata to make an alert or popup, never break the page with an echo like this
                              echo 'Cannot make post';
                        }
                  }
            }
      }

      public function my_post(){
            // Method will need to join user table and post table by overwritting the current model setup
            if($this->session->userdata('is_logged_in') == FALSE){
                  redirect('login');
            }else{
                  $poster_id = $this->session->userdata('user_id');
                  $data['posts'] = $this->post->get_my_post($poster_id);

                  $data['title'] = 'My Post | '. $this->session->userdata('firstname');
                  $data['module'] = 'posts';
                  $data['view_file'] = 'my_post';
                  echo Modules::run('templates/user_layout', $data);
            }
      }
}
?>
