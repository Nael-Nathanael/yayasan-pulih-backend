<?php

namespace App\Models;

use CodeIgniter\Model;

class PsyModel extends Model
{
    protected $table = 'psy';
    protected $primaryKey = 'slug';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'slug',
        'name',
        'isAvailable',
        'SIPP',
        'STR',
        'sesi',
        "rating",
        "reviews",
        "pengalaman_praktik",
        "tag",
        "mastery",
        "description",
        "photo",
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
