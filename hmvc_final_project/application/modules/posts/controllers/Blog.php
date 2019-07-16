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
            echo 'halp!';
      }
}
?>
