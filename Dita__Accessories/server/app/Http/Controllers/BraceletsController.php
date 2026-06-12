<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BraceletsController extends Controller
{
    public function index()
    {
        return view('bracelets');
    }
}