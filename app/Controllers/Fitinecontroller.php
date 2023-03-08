<?php

namespace App\Controllers;

use App\Models\Fitinemodel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Fitinecontroller extends BaseController
{
    public function new()
    {
        return view('fitine_new');
    }

    public function home()
    {
        $model = model(Fitinemodel::class);
        $data['user_profile'] = $model->createFitines();
        return view('pages/fitine_home', $data);
    }

}