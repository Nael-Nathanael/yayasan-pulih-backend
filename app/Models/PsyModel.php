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
        'photo',
        'name',
        'spesialisasi',
        'domisili',
        'jenis_kelamin',
        'email',
        'phone',

        'CV_file',
        'ijazah_transcript_file',
        'motivational_letter_file',

        'SIPP',
        'SIPP_year',
        'SIPP_year_end',
        'SIPP_status',
        'SIPP_file',

        'STR',
        'STR_year',
        'STR_year_end',
        'STR_status',
        'STR_file',

        'lang_fluency_english',
        'lang_fluency_indonesia',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
