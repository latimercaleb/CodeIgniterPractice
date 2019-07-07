<div class='col-8 center-block register-page gray-bg'>
      <h2>Register here ... !</h2>
      <?php
            $firstname = array(
                  'name' => 'firstname',
                  'class' => 'form-control',
                  'type' => 'text',
                  'id' => 'firstname',
                  'placeholder' => 'Enter your first name',
                  'value' => set_value('firstname')
            );
            $lastname = array(
                  'name' => 'lastname',
                  'class' => 'form-control',
                  'type' => 'text',
                  'id' => 'lastname',
                  'placeholder' => 'Enter your last name',
                  'value' => set_value('lastname')
            );
            $email = array(
                  'name' => 'email',
                  'class' => 'form-control',
                  'type' => 'email',
                  'id' => 'email',
                  'placeholder' => 'Enter your email',
                  'value' => set_value('email')
            );
            $password = array(
                  'name' => 'password',
                  'class' => 'form-control',
                  'type' => 'password',
                  'id' => 'password',
                  'placeholder' => 'Enter your password'
            );
            $confirm_password = array(
                  'name' => 'confirm_password',
                  'class' => 'form-control',
                  'type' => 'password',
                  'id' => 'confirm_password',
                  'placeholder' => 'Re-Enter your password'
            );
            $gender = array(
                  'name' => 'gender',
                  'class' => 'form-control',
                  'id' => 'gender',
                  'value' => set_value('gender')
            );
            $gender_options = array(
                  '' => 'Select your gender',
                  'male' => 'Male',
                  'female' => 'Female',
                  'others' => 'Others'
            );
            $register_submit = array(
                  'name' => 'register_submit',
                  'class' => 'btn btn-primary',
                  'value' => 'Register'
            );
            echo form_open('register',array('class','form-horizontal'));

            echo form_input($firstname);
            echo '<div class="error">'.form_error('firstname').'</div>';

            echo form_input($lastname);
            echo '<div class="error">'.form_error('lastname').'</div>';

            echo form_input($email);
            echo '<div class="error">'.form_error('email').'</div>';

            echo form_input($password);
            echo '<div class="error">'.form_error('password').'</div>';

            echo form_input($confirm_password);
            echo '<div class="error">'.form_error('confirm_password').'</div>';

            echo form_dropdown($gender, $gender_options);
            echo '<div class="error">'.form_error('gender').'</div>';

            echo form_submit($register_submit);
      ?>
</div>
