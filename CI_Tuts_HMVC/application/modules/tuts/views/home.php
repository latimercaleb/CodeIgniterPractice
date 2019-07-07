<h2>Home Page</h2>
<?php
      $this->load->module('posts');
      $this->posts->hello();
      echo '<hr />';
      echo Modules::run('posts/hello'); // Another way of calling a module
?>
