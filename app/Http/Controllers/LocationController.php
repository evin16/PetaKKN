<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    //public index
    public function index(Request $request, $location)
    {
        // dd($request->location);

        $cityName = $request->location;

        $location = DB::table('locations')->where('name', $cityName)->orWhere('name', 'like', '%' . $cityName . '%')->select('name', 'js_coordinates')->get();

        return view('components.map');
    }
}
