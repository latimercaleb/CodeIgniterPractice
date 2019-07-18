<div class='profile-holder'>
      <div class='row gray-bg'>
            <div class='col-4 text-center'>
                  <img  src="<?= base_url();?>assets/images/<?= $user_profile['profile_pic'];?>" class='img-fluid' alt='User Image'/>
                  <?= anchor('view_authors_posts/'.$user_profile['id'], 'View '.$user_profile['firstname']."'".'s posts' );?>
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
            </div>
      </div>
</div>
