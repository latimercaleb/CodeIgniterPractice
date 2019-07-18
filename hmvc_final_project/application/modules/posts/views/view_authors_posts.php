<div>
      <div>
            <?php
                  if(isset($error)){
                        echo "<h3>".$error."</h3>";
                  }else{
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
                                    <small><?= ucfirst($post['category_name']); ?></small>
                              </div>
                              <p><?= word_limiter($post['body'], 30); ?></p>
                              <?= anchor('view_post/'.$post['post_id'], 'Read More', array('class' => 'btn btn-primary')); ?>
                        </div>
            <?php
                        }
                  }
            }
            ?>
      </div>
</div>
