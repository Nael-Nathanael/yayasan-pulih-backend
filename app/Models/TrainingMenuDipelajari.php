<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingMenuDipelajari extends Model
{
    protected $table = 'trainingmenu_dipelajari';
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
