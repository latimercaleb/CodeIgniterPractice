<div class='gray-bg add-post'>
      <?php
            if($this->session->userdata('is_logged_in') == FALSE){
                  echo 'You need to login first! ' . anchor('login', 'Add a Comment', array('class' => 'btn btn-primary'));
            }else{
      ?>
      <h2>New Comment</h2>
      <?php
            $hidden = array(
                  'commenter_id' => $this->session->userdata('user_id'),
                  'post_id' => $this->uri->segment(2)
            );
            $comment_body = array(
                  'name' => 'comment_body',
                  'class' => 'form-control',
                  'rows' => '5',
                  'cols' => '10',
                  'id' => 'comment_body',
                  'placeholder' => 'Enter a comment',
                  'value' => set_value('comment_body')
            );
            $comment_submit = array(
                  'name' => 'comment_submit',
                  'class' => 'btn btn-primary',
                  'value' => 'Comment'
            );
      ?>
      <?= form_open('save_comment', array('class' =>'form-horizontal'));?>
      <?= form_hidden($hidden);?>

      <?= form_textarea($comment_body);?>
      <?= '<div class="errors">'.form_error('comment_body').'</div>';?>

      <?= form_submit($comment_submit);?>
      <?= form_close();?>
<?php } ?>
</div>
