<?php
      class Migration_Alter_Posts extends CI_Migration{
            // Change table
            public function up(){
                  $field=array(
                        'created_at' => array(
                              'type' => 'timestamp'
                        )
                  );

                  $this->dbforge->add_column('posts', $field);
            }
            // Delete Table
            public function down(){
                  $this->dbforge->drop_table('posts');
            }
      }
?>
