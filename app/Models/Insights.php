<?php

namespace App\Models;

use CodeIgniter\Model;

class Insights extends Model
{
    protected $table = 'insights';
    protected $primaryKey = 'slug';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['slug', 'title', 'topic', 'tag', 'short_description', 'content', 'imgUrl'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
