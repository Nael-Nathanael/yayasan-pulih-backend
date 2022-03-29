<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingMenuMarket extends Model
{
    protected $table = 'trainingmenu_targetmarket';
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
