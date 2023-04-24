<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $DBGroup          = 'default';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $table = 'user';
    protected $primaryKey = 'id_user';
   
    protected $allowedFields = [
        'id_user',
        'name',
        'firstname',
        'gender',
        'role',
        'id_address',
        'permissions', 
        'cin',
        'phone',
        "birthday",
        'mail',
        'password',       
        "status",
    ];
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

    // mise à jour horodatage
    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    // mise à jour horodatage
    protected function beforeUpdate(array $data)
    {
        //$data = $this->passwordHash($data);
        return $data;
    }

    /**
     * passwordHash
     * Génère la mot de passe pour l'utilisateur
     * Retourne un tableau
     * @param  mixed $data
     * @return array
     */
    protected function passwordHash(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getInfos($id)
    {
        return $this->select("user.id_user, user.name, user.firstname, user.birthday, user.gender,
         user.phone, user.mail, address.number, address.street,address.cp, address.city")
         ->join("address", "user.id_user=address.id_address")
         ->where('user.id_user', $id)
         ->findAll();
    }
}
