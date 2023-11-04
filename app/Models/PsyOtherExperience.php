<?php

namespace App\Models;

use CodeIgniter\Model;

class PsyOtherExperience extends Model
{
    protected $table = 'psy__other_experience';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'psy_slug',
        'bidang',
        'organisasi',
        'tahun',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
