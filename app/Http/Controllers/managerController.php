<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managerController extends Controller
{
    public function homeLogo()
    {
        return view('admin.home.homeManager');
    }
}
