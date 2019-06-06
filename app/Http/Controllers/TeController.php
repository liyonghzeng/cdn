<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeController extends Controller
{
    //
    public function index()
    {
        return view('test/cdn');
    }
}
