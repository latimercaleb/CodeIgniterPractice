<div class='profile-holder'>
      <div class='row gray-bg'>
            <div>
                  <?php
                        if ($this->session->flashdata('ProfiledUpdated')){
                              echo "<div class='col-10'>";
                              echo "<div class='alert alert-dismissible alert-success'>";
                              echo "<div class='flash-data'>";
                              echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                              echo "<strong>Updated!</strong> ".$this->session->flashdata('ProfiledUpdated');
                              echo "</div></div></div>";
                        }
                  ?>
            </div>
            <div class='col-4 text-center'>
                  <img  src="<?= base_url();?>assets/images/<?= $user_profile['profile_pic'];?>" class='img-fluid' alt='User Image'/>
                  <?= anchor('edit_profile_pic', 'Edit Profile Pic');?>
            </div>
            <div class='col-8'>
                  <p>
                        <strong>Name</strong>:-<?= $user_profile['firstname']. ' '. $user_profile['lastname'];?>
                  </p>
                  <p>
                        <strong>Email</strong>:- <?= $user_profile['email'];?>
                  </p>
                  <p>
                        <strong>Gender</strong>:- <?= $user_profile['gender'];?>
                  </p>
                  <p>
                        <strong>About</strong>:- <?= $user_profile['about'];?>
                  </p>
                  <?= anchor('edit_profile', 'Edit Profile', array('class' => 'btn btn-primary'));?>
            </div>
      </div>
</div>
