<?php
// Basic form practice with form helper, make a list of params in a map and pass it to the helper to generate the html element
  $title= array(
    'name' => 'title',
    'type' => 'text',
    'id' => 'title',
    'class' => 'form-control',
    'value' => set_value('title'),
    'placeholder' => 'Enter a title'
  );

  $body = array(
    'name' => 'body',
    'type' => 'text',
    'id' => 'body',
    'class' => 'form-control',
    'value' => set_value('body'),
    'placeholder' => 'Enter a body for the post'
  );

  $attrs = array(
    'id' => 'Add Posts',
  );

  $submit = array(
    'name' => 'submitpost',
    'value' => 'Submit a Post',
    'class' => 'btn btn-primary'
  );

  echo "<h2>Add a post</h2>";
  // echo validation_errors(); // Lists all errors at once
  echo form_open('pages/form_posted',$attrs);
  echo form_input($title);
  echo '<div class="errors">'.form_error('title').'</div>'; // For individual errors
  echo form_textarea($body);
  echo '<div class="errors">'.form_error('body').'</div>';
  echo form_submit($submit);
  echo form_close();

?>
