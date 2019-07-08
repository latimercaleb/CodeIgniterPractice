<div>
      hi <br/>
      <?php
            if ($this->session->flashdata('UserRegistered')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible alert-success'>";
                  echo "<div class='flash-data'>";
                  echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                  echo "<strong>Well Done!</strong> ".$this->session->flashdata('UserRegistered');
                  echo "</div></div></div>";
            }
      ?>
</div>

<div class='col-8 center-block login-page gray-bg'>
      <h2>Login</h2>
      <div class='col-8 center-block register-page gray-bg'>
            <?php
                        $email = array(
                              'name' => 'login_email',
                              'class' => 'form-control',
                              'type' => 'email',
                              'id' => 'email',
                              'placeholder' => 'Enter your email',
                              'value' => set_value('email')
                        );
                        $password = array(
                              'name' => 'login_password',
                              'class' => 'form-control',
                              'type' => 'password',
                              'id' => 'password',
                              'placeholder' => 'Enter your password'
                        );

                        $login_submit = array(
                              'name' => 'login_submit',
                              'class' => 'btn btn-primary',
                              'value' => 'Login'
                        );
                        echo form_open('login',array('class','form-horizontal'));

                        echo form_input($email);
                        echo '<div class="errors">'.form_error('login_email').'</div>';

                        echo form_input($password);
                        echo '<div class="errors">'.form_error('login_password').'</div>';

                        echo form_submit($login_submit);
                  ?>
      </div>
</div>
