<?php

namespace App\Models;

use CodeIgniter\Model;

class PsyWorkingExperienceModel extends Model
{
    protected $table = 'psy__working_experience';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'psy_slug',
        'current_position',
        'bidang',
        'perusahaan',
        'tahun_bekerja_start',
        'tahun_bekerja_end',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
