<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingMenu extends Model
{
    protected $table = 'trainingmenu';
    protected $primaryKey = 'guid';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'guid',
        'kategori',
        "subkategori",
        "name",
        "durasi_hour",
    ];

    // Dates
    protected $useTimestamps = false;
}