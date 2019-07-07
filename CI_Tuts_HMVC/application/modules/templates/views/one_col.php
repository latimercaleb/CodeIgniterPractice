<!DOCTYPE html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Caleb">
      <meta name="description" content="CSON Snippet for html skeleton">
      <meta name = "keywords"  content= "Test File">
      <title>One_Col</title>
      <link rel="stylesheet" type='text/css' href='<?php echo base_url()?>assets/css/bootstrap.min.css'>
      <link rel="stylesheet" type='text/css' href='<?php echo base_url()?>assets/css/custom.css'>
</head>
<body>
      <div class='container'>
            <div class='row panel' >
                  <h2>One Column Layout Page</h2>
                  <?php
                        $this->load->view($module.'/'.$view_file);
                  ?>
            </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
