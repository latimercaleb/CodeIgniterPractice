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
</div>
