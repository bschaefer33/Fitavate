<?php

namespace App\Models;

use CodeIgniter\Model;

class Fitinemodel extends Model
{
    
    protected function createFitines()
    {
        $db = db_connect();
        $builder = $db->table('user_profile');
        if (! $db->simpleQuery('SELECT * FROM userFiTine')) {
            return $db->error();
        }else {
            return $builder->get();
        }
        

    }
}