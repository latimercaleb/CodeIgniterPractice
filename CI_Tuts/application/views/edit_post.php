<?php

  $title= array(
    'name' => 'title',
    'type' => 'text',
    'id' => 'title',
    'class' => 'form-control',
    'value' => $post['title'],
    'placeholder' => 'Enter a title'
  );

  $body = array(
    'name' => 'body',
    'type' => 'text',
    'id' => 'body',
    'class' => 'form-control',
    'value' => $post['body'],
    'placeholder' => 'Enter a body for the post'
  );

$id = array(
      'post_id' => $post['id']
);

  $attrs = array(
    'id' => 'Add Posts',
  );

  $submit = array(
    'name' => 'submitpost',
    'value' => 'Update a Post',
    'class' => 'btn btn-primary'
  );

  echo "<h2>Edit post</h2>";
  echo form_open('pages/update_post',$attrs);
  echo form_hidden($id);
  echo form_input($title);
  echo '<div class="errors">'.form_error('title').'</div>'; // For individual errors
  echo form_textarea($body);
  echo '<div class="errors">'.form_error('body').'</div>';
  echo form_submit($submit);
  echo form_close();

?>
