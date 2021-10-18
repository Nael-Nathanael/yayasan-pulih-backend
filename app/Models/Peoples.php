<?php

namespace App\Models;

use CodeIgniter\Model;

class Peoples extends Model
{
    protected $table = 'people';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'imgUrl',
        'name',
        'position',
        'description',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}