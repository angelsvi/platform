<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AsistenMod extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'praktikum' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ipk' => [
                'type' => 'FLOAT',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('asistenMod');
    }

    public function down()
    {
        //
    }
}
