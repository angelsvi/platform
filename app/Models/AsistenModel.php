<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $allowedFields = ['nim', 'nama', "praktikum", "ipk"];
    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'praktikum' => $record['praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }
}
