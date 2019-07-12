<div class='col-8 center-block gray-bg'>
      <h2>Edit profile </h2>
      <?php
            $firstname = array(
                  'name' => 'firstname',
                  'class' => 'form-control',
                  'type' => 'text',
                  'id' => 'firstname',
                  'placeholder' => 'Enter your first name',
                  'value' => $user_profile['firstname']
            );
            $lastname = array(
                  'name' => 'lastname',
                  'class' => 'form-control',
                  'type' => 'text',
                  'id' => 'lastname',
                  'placeholder' => 'Enter your last name',
                  'value' => $user_profile['lastname']
            );
            $email = array(
                  'name' => 'email',
                  'class' => 'form-control',
                  'type' => 'email',
                  'id' => 'email',
                  'placeholder' => 'Enter your email',
                  'value' => $user_profile['email'],
                  'readonly' => 'true'
            );
            $about = array(
                  'name' => 'about',
                  'class' => 'form-control',
                  'row' => '5',
                  'cols' => '10',
                  'placeholder' => 'Enter something about yourself',
                  'value' => $user_profile['about']
            );
            $profile_submit = array(
                  'name' => 'profile_submit',
                  'class' => 'btn btn-primary',
                  'value' => 'Update Profile'
            );
            echo form_open('edit_profile',array('class','form-horizontal'));

            echo form_input($firstname);
            echo '<div class="errors">'.form_error('firstname').'</div>';

            echo form_input($lastname);
            echo '<div class="errors">'.form_error('lastname').'</div>';

            echo form_input($email);
            echo '<div class="errors">'.form_error('email').'</div>';

            echo form_textarea($about);
            echo '<div class="errors">'.form_error('about').'</div>';

            echo form_submit($profile_submit);
            echo form_close();
      ?>
</div>
