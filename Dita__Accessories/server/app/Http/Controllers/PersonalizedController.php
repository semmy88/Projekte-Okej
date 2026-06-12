<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalizedController extends Controller
{
    public function index()
    {
        return view('personalized');
    }
}
