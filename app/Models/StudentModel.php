<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table            = 'students';  
    protected $primaryKey       = 'id';       
    protected $useAutoIncrement = true;        
    protected $returnType       = 'array';     
    protected $useSoftDeletes   = false;       
    protected $protectFields    = true;        
    protected $allowedFields    = ['name', 'username', 'email', 'phone_number', 'address']; 

    protected bool $allowEmptyInserts = false;   
    protected bool $updateOnlyChanged = true;    

    protected array $casts = [];  
    protected array $castHandlers = [];  

    protected $useTimestamps = true;  
    protected $dateFormat    = 'datetime';  
    protected $createdField  = 'created_at';  
    protected $updatedField  = 'updated_at';  
    protected $deletedField  = 'deleted_at';  

    protected $validationRules      = [  
        'name'          => 'required|string|min_length[3]|max_length[255]',
        'username'      => 'required|string|min_length[3]|max_length[255]',
        'email'         => 'required|valid_email',
        'phone_number'  => 'required|string|min_length[10]|max_length[15]',
        'address'       => 'required|string|min_length[5]|max_length[255]'
    ];
    protected $validationMessages   = [];  
    protected $skipValidation       = false;  
    protected $cleanValidationRules = true; 

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
