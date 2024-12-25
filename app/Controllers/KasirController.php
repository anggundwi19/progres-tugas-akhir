<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KasirController extends BaseController
{
    public function index()
    {
        //
        return view('kasir/homeKasir');
    }
}
