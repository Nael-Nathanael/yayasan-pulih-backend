<?php

namespace App\Models;

use CodeIgniter\Model;

class Webinars extends Model
{
    protected $table = 'webinars';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'datetime',
        'title',
        'description',
        'url',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
