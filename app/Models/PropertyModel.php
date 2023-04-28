<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'property';
    protected $primaryKey       = 'id_property';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_property',
        'name',
        'type',
        'surface',
        'extras',
        'room',
        'price',
        'date',
        'rating',
        'owner',
        'id_address',
        'status',
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


    public function getProperties($status=VERIFIED){
        return $this->select("*")
        ->join('address', 'property.id_address=address.id_address')  
        ->where("property.status", $status)      
        ->findAll();
    }

    public function getProperty($id){
        return $this->select("*")
        ->join('address', 'property.id_address=address.id_address')
        ->where("property.id_property",$id)
        ->findAll();
    }
}
