<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class AjaxController extends Controller
{
    //

    public function getTrips(Request $request){
        if($request->ajax()){

            $trips = Trip::where('region_id', $request->region_id)->get();


            $trips_arr = array('0' => "--Select option");

            foreach($trips as $trip){
                $trips_arr[$trip->id] = $trip->trip_name;
            }

            return response()->json($trips_arr);
        }
    }
}
