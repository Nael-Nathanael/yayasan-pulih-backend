<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanAuditModel extends Model
{
    protected $table = 'laporan_audit';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['url', 'name'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
}
