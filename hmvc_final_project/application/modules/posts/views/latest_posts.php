<div>
      <div>
            <?php
                  if ($this->session->flashdata('PostAdded')){
                        echo "<div class='col-10'>";
                        echo "<div class='alert alert-dismissible alert-success'>";
                        echo "<div class='flash-data'>";
                        echo "<button  type='button' class='close' data-dismiss='alert'> X </button>";
                        echo "<strong>Updated!</strong> ".$this->session->flashdata('PostAdded');
                        echo "</div></div></div>";
                  }
            ?>
      </div>
      <div class = 'post-page'>
            <?php
                  if(empty($posts)){
                        echo "<h3>No Posts recorded!</h3>";
                  }else{
                        foreach($posts as $post){
                        ?>
                        <div class='post-holder gray-bg'>
                              <h3><?= $post['title'];?></h3>
                              <div class='post_details'>
                                    <small><?= anchor('view_author_profile/'.$post['poster_id'], $post['firstname'].' '.$post['lastname']);?></small>
                                    <small> | <?= ucfirst($post['category_name']); ?></small>
                                    <small> | <?= $post['total_comments']; ?></small>
                              </div>
                              <p><?= word_limiter($post['body'], 30); ?></p>
                              <?= anchor('view_post/'.$post['post_id'], 'Read More', array('class' => 'btn btn-primary')); ?>
                        </div>
            <?php
                        }
                  }
            ?>
      </div>
</div>
