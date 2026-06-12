<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewArrivalsController extends Controller
{
    public function index()
    {
        return view('newarrivals');
    }
}
