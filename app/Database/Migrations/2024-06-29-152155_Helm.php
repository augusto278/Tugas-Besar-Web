<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Helm extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => FALSE,
            ],
            'produk' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => FALSE,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],
            'qty' => [
                'type' => 'INT',
                'constraint' => 100,
                'null' => FALSE
            ],
            'foto' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => FALSE,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => TRUE
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('helm');

    }

    public function down()
    {
        $this->forge->dropTable('helm');
    }
}
