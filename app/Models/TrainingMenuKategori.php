<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingMenuKategori extends Model
{
    protected $table = 'trainingmenu_kategori';
    protected $primaryKey = 'name';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        "name",
        "group",
        "imgSrc",
    ];

    // Dates
    protected $useTimestamps = false;
}
