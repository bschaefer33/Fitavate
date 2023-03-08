<?php

namespace App\Models;

use CodeIgniter\Model;

class Fitinemodel extends Model
{
    
    protected function createFitines()
    {
        $db = db_connect();
        $builder = $db->table('user_profile');
        $builder->select('user_id,userDisplayName');
        $query = $builder->get();
        foreach($query->getResultArray() as $row){
            echo $row['user_id'];
            echo $row['userDisplayName'];
        }
    }
}