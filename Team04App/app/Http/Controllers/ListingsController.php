<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingsController extends Controller
{

    // TUTORIAL
    // https://laravel.com/docs/master/queries
    // Everything is a get parameter


    public function index(Request $request)
    {

        // ?id={INT}
        $id = $request->input('id') ?: '%';
        // ?type=[house, apartment, room]
        $type = $request->input('type') ?: '%';
        // ADDRESS FORMAT
        // 600 Holloway Ave, San Francisco, CA 94132
        // $street, $city, CA $zip
        $street = $request->input('street') ?: '%';
        $city = $request->input('city') ?: '%';
        $zip = $request->input('zip') ?: '%';
        // ?bedrooms={INT}
        $bedrooms = $request->input('bedrooms') ?: '%';
        // ?bathrooms={INT}
        $bathrooms = $request->input('bathrooms') ?: '%';
        // ?rent={INT}
        $rent = $request->input('rent') ?: '%';
        // ?min_rent={INT}
        $min_rent = $request->input('min_rent') ?: '0';
        // ?max_rent={INT}
        $max_rent = $request->input('max_rent') ?: '9999999';
        // ?description={TEXT}
        $description = $request->input('description') ?: '%';
        // ?image={TEXT} - Although i don't know why anyone would be searching via image url
        $image = $request->input('image') ?: '%';
        // ?date={DATETIME} - It's gotta be exact as it is right now
        $date = $request->input('date') ?: '%';
        // ?distance_from_campus={INT} - In miles
        $distance_from_campus = $request->input('distance_from_campus') ?: '%';
        // ?commute_time_to_campus={INT} - In minutes
        $commute_time_to_campus = $request->input('commute_time_to_campus') ?: '%';
        // ?landlord_id={INT}
        $landlord_id = $request->input('landlord_id') ?: '%';
        // ?order=[asc, desc]
        $order = $request->input('order') ?: 'desc';
        // ?limit={INT}
        $limit = $request->input('limit') ?: 9999999;
        // ?search={TEXT} - This searches through the `combined` column to see if anything matches
        $search = $request->input('search') ?: '%';
        // $?pending=[0, 1]
        //0 for approved, 1 for pending
        $pending = $request->input('pending') ?: '0';

        $listing = DB::table('listings')->where([
            ['id', 'like', $id],
            ['type', 'like', $type],
            ['street', 'like', $street],
            ['city', 'like', $city],
            ['zip', 'like', $zip],
            ['bedrooms', '>=', $bedrooms],
            ['bathrooms', '>=', $bathrooms],
            ['rent', 'like', $rent],

            ['description', 'like', $description],
            ['image', 'like', $image],
            ['date', 'like', $date],
            ['distance_from_campus', 'like', $distance_from_campus],
            ['commute_time_to_campus', 'like', $commute_time_to_campus],
            ['landlord_id', 'like', $landlord_id],
            ['pending', 'like', $pending],
            //combined is a column that is the result of every other column being concated
            ['combined', 'like', '%' . $search . '%']
        ])->whereBetween('rent', [$min_rent, $max_rent])
            ->limit($limit)
            ->orderBy('date', $order)
            ->get();
//        dd($listing);
        return $listing;

    }


    public function simple(Request $request)
    {
        // ?limit={INT}
        $limit = $request->input('limit') ?: 9999999;
        $listing = DB::table('listings')
            ->select('type', 'rent', 'street', 'city', 'zip', 'bedrooms', 'bathrooms', 'image')
            ->limit($limit)
            ->get();
//        echo $listing[0]->rent;
        return $listing;

    }
}