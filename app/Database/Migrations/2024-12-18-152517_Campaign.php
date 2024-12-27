<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Campaign extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'campaign_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'process' => [
                'type' => 'TEXT',
            ],
            'active' => [
                'type' => 'BOOLEAN',
                'default' => true,
            ],
            'start_date' => [
                'type' => 'DATETIME',
            ],
            'end_date' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('campaigns');
    }

    public function down()
    {
        $this->forge->dropTable('campaigns');
    }
}
