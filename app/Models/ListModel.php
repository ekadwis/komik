<?php

namespace App\Models;

use CodeIgniter\Model;

class ListModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'list_komik';
    protected $primaryKey       = 'id_komik';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['judul_komik', 'tipe_komik', 'img'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function search($keyword)
    {
        // $builder = $this->table('list_komik'); // list_komik adalah nama table
        // $builder->like('judul_komik', $keyword, 'both');
        // return $builder;

        return $this->table('list_komik')->like('judul_komik', $keyword, 'both');


        // return $this->ListModel->query('SELECT * FROM list_komik WHERE judul_komik LIKE ' . $keyword); // judul_komik adalah nama field, search adalah nama keyword
    }
}
