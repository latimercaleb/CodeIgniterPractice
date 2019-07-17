<div class='gray-bg add-post'>
      <h2>New Post</h2>
      <?php
            $hidden = array(
                  'poster_id' => $this->session->userdata('user_id')
            );
            $title = array(
                  'name' => 'title',
                  'class' => 'form-control',
                  'type' => 'text',
                  'id' => 'title',
                  'placeholder' => 'Enter a title for a post',
                  'value' => set_value('title')
            );
            $body = array(
                  'name' => 'body',
                  'class' => 'form-control',
                  'rows' => '5',
                  'cols' => '10',
                  'id' => 'about',
                  'placeholder' => 'Enter your post body',
                  'value' => set_value('body')
            );
            $post_submit = array(
                  'name' => 'post_submit',
                  'class' => 'btn btn-primary',
                  'value' => 'Add Post'
            );
      ?>
      <?= form_open('add_post', array('class' =>'form-horizontal'));?>
      <?= form_hidden($hidden);?>
      <?= form_input($title);?>
      <?= '<div class="errors">'.form_error('title').'</div>';?>

      <?= form_textarea($body);?>
      <?= '<div class="errors">'.form_error('body').'</div>';?>

      <?= Modules::run('categories/categories/get_cat_for_form');?>
      <?= '<div class="errors">'.form_error('category').'</div>';?>

      <?= form_submit($post_submit);?>
      <?= form_close();?>
</div>
