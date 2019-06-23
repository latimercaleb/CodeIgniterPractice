<?php
      require_once APPPATH . 'core/MY_Controller.php';
      defined('BASEPATH') OR exit('No direct script access allowed');
      // Extend Frontend_Controller here for debug stuff
      class Pages extends CI_Controller{
            public function __construct(){
                  parent::__construct();
                  $this->load->model('page');
            }

            public function index(){
                  // $this->data['article'] = array('article 1','article 2');
                  // $this->data['user'] = 'Eko';
                  // $this->load->view('Pages/home', $this->data);
                  // $data = $this->page->find(); // For all posts
                  // $data = $this->page->find(3); // For single post
                  // $data = $this->page->find(array(3,4)); // For more than one post
                  // $data = $this->page->find_by('title','Fifth Post', NULL, TRUE); // Find by a title, could pass in an array with multiple params for a post and find that way as well
                  // $data = $this->page->get_assoc(array(2,3));
                  // $data = $this->page->to_assoc($data);
                  echo '<pre>';
                  print_r($data);

            }
      }
?>
