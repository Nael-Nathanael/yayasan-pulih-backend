<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselBanner extends Model
{
    protected $table = 'carousel_banner';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['headline', 'description', 'imgUrl', 'link'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
