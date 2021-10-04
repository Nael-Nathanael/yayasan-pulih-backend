<?php

namespace App\Models;

use CodeIgniter\Model;

class Lines extends Model
{
    protected $table = 'lines';
    protected $primaryKey = 'key';
    protected $useAutoIncrement = false;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['group_name', 'key', 'value'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    function findOrEmptyString($key): string
    {
        $target = $this->find($key);
        if (!$target) {
            return '';
        }
        return $target->value;
    }

    function findOrPlaceholderImage($key): string
    {
        $target = $this->find($key);
        if (!$target) {
            return 'https://via.placeholder.com/500';
        }
        return $target->value;
    }
}
