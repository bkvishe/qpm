<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_rtl_user extends CI_Migration {

    public function up()
    {
        $fields = array(
                'user_token' => array(
                'type' => 'TEXT',
                'null' => FALSE
            )
        );

        $this->dbforge->add_column('rtl_user', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('rtl_user', 'user_token');
    }
}