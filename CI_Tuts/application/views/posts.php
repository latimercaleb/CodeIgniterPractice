<?php
      foreach($get_posts as $p):
?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$p['title']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?=$p['created_at']?></h6>
    <p class="card-text"><?=$p['body']?></p>
  </div>
</div>

<?php
      endforeach;
?>
