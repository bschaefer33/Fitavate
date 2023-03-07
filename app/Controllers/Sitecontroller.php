<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Sitecontroller extends BaseController{
    public function index()
    {
        return view('pages/home');
    }

    public function fitines()
    {
        return view('pages/fitine_home');
    }
}