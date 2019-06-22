<?php
echo "<br/>";
      foreach($get_posts as $p):
            $body = word_limiter($p['body'], 25);
?>

<div class="card" style="width: 18rem; margin-left:18rem; margin-bottom: 50px;">
  <div class="card-body">
    <h5 class="card-title"><?=$p['title']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$p['created_at']?></h6>
    <p class="card-text"><?=$body?></p>
    <?php echo anchor('pages/view_post/'.$p['id'], 'Read More')?>
  </div>
</div>

<?php
      endforeach;
?>
