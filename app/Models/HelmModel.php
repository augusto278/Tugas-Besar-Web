<?php

namespace App\Models;

use CodeIgniter\Model;

class HelmModel extends Model
{
    protected $table = 'helm';
    protected $allowedFields = ['merk', 'produk' , 'deskripsi', 'qty', 'foto'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [
        'merk' => 'required|min_length[10]|max_length[100]',
        'produk' => 'required',
        'deskripsi' => 'required',
        'qty' => 'required',
        'foto' => 'required'
    ];

    protected $skipValidation = false;
}
