<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NecklasesController extends Controller
{
    public function index()
    {
        return view('necklases');
    }
}