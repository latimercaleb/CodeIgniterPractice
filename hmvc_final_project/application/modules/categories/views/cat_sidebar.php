<div class='sidebar-holder'>
      <?php
            foreach($categories as $cat):
      ?>
      <ul class='sidebar'>
            <li><?=anchor('view_category_post/'.$cat['id'], $cat['category_name'])?></li>
      </ul>
<?php endforeach;?>

</div>
