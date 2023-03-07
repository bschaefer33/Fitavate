<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
class Fitinecontroller extends BaseController
{
    public function new()
    {
        return view('fitine_new');
    }

    public function home()
    {
        return view('pages/fitine_home');
    }

}