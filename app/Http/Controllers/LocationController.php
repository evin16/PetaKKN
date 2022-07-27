<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    //public index
    public function index(Request $request)
    {
        // dd($request->location);

        $cityName = $request->location;

        $location = DB::table('locations')->where('name', $cityName)->orWhere('name', 'like', '%' . $cityName . '%')->select('name')->get();

        // return view('components.map');

        dd($location[0]->name);

        switch($location){

            case 'Kota Surakarta':
                return view('location.surakarta');
                break;

            case 'Kabupaten Boyolali':
                return view('location.boyolali');
                break;

            case 'Kabupaten Klaten':
                return view('location.klaten');
                break;

            case 'Kabupaten Karanganyar':
                return view('location.karanganyar');
                break;

            case 'Kabupaten Magetan':
                return view('location.magetan');
                break;

            case 'Kabupaten Ngawi':
                return view('location.ngawi');
                break;

            case 'Kabupaten Sragen':
                return view('location.sragen');
                break;

            case 'Kabupaten Sukoharjo':
                return view('location.sukoharjo');
                break;

            case 'Kabupaten Wonogiri':
                return view('location.wonogiri');
                break;

            case 'Kota Klaten':
                return view('location.klaten');
                break;

        }
    }
}
