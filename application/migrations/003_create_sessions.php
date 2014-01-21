<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_sessions extends CI_Migration
{
    public function up()
    {
        $fields = array(
            'session_id VARCHAR(40) DEFAULT \'0\' NOT NULL',
            'ip_address VARCHAR(45) DEFAULT \'0\' NOT NULL',
            'user_agent VARCHAR(120) NOT NULL',
            'last_activity INT(10) unsigned DEFAULT 0 NOT NULL',
            'user_data text not null'
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('session_id', true);
        $this->dbforge->create_table('ci_sessions');
        $this->db->query('alter table `ci_sessions` add key `last_activity_ids` (`last_activity`)');
    }

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}