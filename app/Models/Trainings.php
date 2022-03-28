<?php

namespace App\Models;

use CodeIgniter\Model;

class Trainings extends Model
{
    protected $table = 'trainings';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'id',
        'imgurl',
        "category",
        "header",
        "description",
        "tantangan_yang_dihadapi_1",
        "tantangan_yang_dihadapi_2",
        "tantangan_yang_dihadapi_3",
        "hal_yang_dipelajari_1",
        "hal_yang_dipelajari_2",
        "hal_yang_dipelajari_3",
        "hal_yang_dipelajari_img_1",
        "hal_yang_dipelajari_img_2",
        "hal_yang_dipelajari_img_3",
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
