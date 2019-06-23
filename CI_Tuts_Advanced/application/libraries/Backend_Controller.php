<?php
      defined('BASEPATH') OR exit('No direct script access allowed');
      class Backend_Controller extends MY_Controller{
            public function __construct(){
                  parent ::__construct();
                  echo "I am admin";
            }
      }
?>
