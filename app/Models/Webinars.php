<?php

namespace App\Models;

use CodeIgniter\Model;

class Webinars extends Model
{
    protected $table = 'webinars';
    protected $primaryKey = 'videoId';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'videoId',
        'url',
        'title',
        'playlist_title',
        'playlist_url',
        'upload_date',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
