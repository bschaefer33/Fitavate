<?php

namespace App\Models;

use CodeIgniter\Model;

class Fitinemodel extends Model
{
    protected $db = \Config\Database::connect();
    protected $table      = 'fiTine';
    protected $primaryKey = 'fiTine_id';
    
}
