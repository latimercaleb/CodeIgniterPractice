<div>
      hi <br/>
      <?php
            if ($this->session->flashdata('UserRegistered')){
                  echo "<div class='col-10'>";
                  echo "<div class='alert alert-dismissible'>";
                  echo "</div></div>";
            }
      ?>
</div>
