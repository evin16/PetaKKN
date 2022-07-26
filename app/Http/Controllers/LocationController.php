<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //public index
    public function index()
    {
        return view('location.index', compact('locations'));
    }
}
