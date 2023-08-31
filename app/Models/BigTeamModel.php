<?php

namespace App\Models;

use CodeIgniter\Model;

class BigTeamModel extends Model
{
    protected $table = 'big_team';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['photo', 'name', 'position', 'description'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
}
