<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $DBGroup = 'group_name';

    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'email'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
      'username'     => 'required|max_length[30]|alpha_numeric_space|min_length[3]',
      'email'        => 'required|max_length[254]|valid_email|is_unique[users.email]',
      'password'     => 'required|max_length[255]|min_length[8]',
      'pass_confirm' => 'required_with[password]|max_length[255]|matches[password]',
    ];
    protected $validationMessages   = [
      'email' => [
          'is_unique' => 'Sorry. That email has already been taken. Please choose another.',
      ],
    ];
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
}

?>