<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nim', 'nama', 'praktikum', 'ipk'];

    public function simpan($record)
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
}
