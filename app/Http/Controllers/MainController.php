<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function nova_pagina(): View
    {
        return view('nova_pagina');
    }
}
