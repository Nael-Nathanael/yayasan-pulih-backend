<?php

namespace App\Models;

use CodeIgniter\Model;

class Trainings extends Model
{
    protected $table = 'trainings';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'imgurl',
        'imgurl_promo',
        'imgurl_small',
        'imgurl_small_promo',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
