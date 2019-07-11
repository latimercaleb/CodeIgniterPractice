<div>
      <?php
            if ($this->session->flashdata('UpdateProfilePicError')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible alert-danger'>";
                  echo "<div class='flash-data'>";
                  echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                  echo "<strong>Danger!</strong> ".$this->session->flashdata('UpdateProfilePicError');
                  echo "</div></div></div>";
            }
      ?>
</div>

<div>
      <?php
            if ($this->session->flashdata('ProfileImageUpdated')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible alert-danger'>";
                  echo "<div class='flash-data'>";
                  echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                  echo "<strong>Updated!</strong> ".$this->session->flashdata('ProfileImageUpdated');
                  echo "</div></div></div>";
            }
      ?>
</div>

<?php
      $image = array(
            'name' => 'profilefile',
            'class' => 'form-control',
            'type' => 'file',
            'id' => 'profilefile'
      );

      $image_submit = array(
            'name' => 'image_submit',
            'class' => 'btn btn-primary',
            'value' => 'Update'
      );
?>
<div class='profile-holder'>
      <div class='row gray-bg'>
            <div class='col-4 text-center'>
                  <img  src="<?= base_url();?>assets/images/<?= $user_profile['profile_pic'];?>" class='img-fluid' alt='User Image'/>
            </div>
            <div class='col-md-8'>
                  <?= form_open_multipart('update_profile_pic');?>
                  <?= form_label('Accepted Formats are .jpg | .jpeg|.png| and size of image should not exceed 500kb','profilefile');?>
                  <?= form_input($image);?>
                  <?= form_submit($image_submit);?>
                  <!-- Something is broken with this form, figure out what and rework it -->
                  <?= form_close();?>
            </div>
      </div>
</div>
