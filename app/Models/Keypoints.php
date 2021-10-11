<?php

namespace App\Models;

use CodeIgniter\Model;

class Keypoints extends Model
{
    protected $table = 'keypoints';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'title',
        'description',
        'subservice_key',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
