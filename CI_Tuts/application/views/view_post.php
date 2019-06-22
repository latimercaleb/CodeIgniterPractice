<div class="card" style="width: 18rem; margin-left:18rem;">
      <div class="card-body">
            <h5 class="card-title">
                  <?=$post['title']?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                  <?=$post['created_at']?>
            </h6>
            <p class="card-text">
                  <?=$post['body']?>
            </p>
            <?php echo anchor('pages/posts', 'Back to list')?>
             | &nbsp;
            <?php echo anchor('pages/edit_post/'.$post['id'], 'Edit Post')?>
            | &nbsp;
            <?php echo anchor('pages/delete_post/'.$post['id'], 'Delete Post')?>
      </div>
</div>
