<?php
      $attr = array(
            'name' => 'category',
            'class' => 'form-control'
      );
      $list = array(' '=> 'Fetch a category');
      foreach($categories as $cat){
            $list[$cat['id']] = $cat['category_name'];
      }
?>

<?= form_dropdown($attr, $list);?>
