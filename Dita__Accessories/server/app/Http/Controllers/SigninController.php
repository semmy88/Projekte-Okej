<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReflectionClass;
use ReflectionException;
use Illuminate\Contracts\Container\BindingResolutionException;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin');
    }
}
