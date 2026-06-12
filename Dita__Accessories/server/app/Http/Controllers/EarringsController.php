<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EarringsController extends Controller
{
    public function index()
    {
        return view('earrings');
    }
}
