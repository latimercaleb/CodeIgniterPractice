<!DOCTYPE html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Caleb">
      <meta name="description" content="CSON Snippet for html skeleton">
      <meta name = "keywords"  content= "Test File">
      <title>HMVC| Home</title>
</head>
<body>
      <h2>Home Page</h2>
      <?php
            $this->load->module('posts');
            $this->posts->hello();
            echo '<hr />';
            echo Modules::run('posts/hello'); // Another way of calling a module
      ?>
</body>
</html>
