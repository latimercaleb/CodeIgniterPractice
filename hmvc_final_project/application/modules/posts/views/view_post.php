<div class = 'post-page'>
      <?php
            if(empty($view_post)){
                  echo "<h3>No Posts recorded!</h3>";
            }else{
      ?>
      <div class='post-holder gray-bg'>
            <h3><?= $view_post['title'];?></h3>
            <div class='post_details'>
                  <small><?= anchor('view_author_profile/'.$view_post['poster_id'], $view_post['firstname'].' '.$view_post['lastname']);?></small>
                  <small><?= ucfirst($view_post['category_name']); ?></small>
            </div>
            <p><?= $view_post['body']; ?></p>
      </div>
      <?php
            }

            if ($this->session->flashdata('CommentValidation')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible alert-danger'>";
                  echo "<div class='flash-data'>";
                  echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                  echo "<strong>Danger!</strong> ".$this->session->flashdata('CommentValidation');
                  echo "</div></div></div>";
            }
            if ($this->session->flashdata('CommentAdded')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible alert-success'>";
                  echo "<div class='flash-data'>";
                  echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                  echo "<strong>Success!</strong> ".$this->session->flashdata('CommentAdded');
                  echo "</div></div></div>";
            }

            echo Modules::run('comments/postcomments/add_comment');
            echo Modules::run('comments/postcomments/get_comments', $view_post['post_id']);
            ?>
</div>
