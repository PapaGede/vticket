<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Trip;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getService()
    {

        $regions=Region::all();
        $regions_arr=[];

        $trips=Trip::all();
        $trips_arr=[];



        foreach($trips as $trip){
            $trips_arr[$trip->id]=$trip->trip_name;
        }

        foreach($regions as $region){
            $regions_arr[$region->id]=$region->region_name;
        }


        return view('pages.services')
                    ->withRegions($regions_arr)
                    ->withTrips($trips_arr)
        ;
    }

    public function getDetails()
    {
        return view('pages.details');
    }
}
