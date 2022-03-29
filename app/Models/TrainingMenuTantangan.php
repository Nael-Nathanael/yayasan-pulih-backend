<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingMenuTantangan extends Model
{
    protected $table = 'trainingmenu_tantangan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'trainingmenu_guid',
        "value",
    ];

    // Dates
    protected $useTimestamps = false;
}
