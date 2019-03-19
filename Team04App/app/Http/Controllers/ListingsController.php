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
        // ?address={TEXT}
        $address = $request->input('address') ?: '%';
        // ?bedrooms={INT}
        $bedrooms = $request->input('bedrooms') ?: '%';
        // ?bathrooms={INT}
        $bathrooms = $request->input('bathrooms') ?: '%';
        // ?rent={INT}
        $rent = $request->input('rent') ?: '%';
        // ?description={TEXT}
        $description = $request->input('description') ?: '%';
        // ?images={TEXT} - Although i don't know why anyone would be searching via image url
        $images = $request->input('images') ?: '%';
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

        $listing = DB::table('listings')->where([
            ['id', 'like', $id],
            ['type', 'like', $type],
            ['address', 'like', $address],
            ['bedrooms', 'like', $bedrooms],
            ['bathrooms', 'like', $bathrooms],
            ['rent', 'like', $rent],
            ['description', 'like', $description],
            ['images', 'like', $images],
            ['date', 'like', $date],
            ['distance_from_campus', 'like', $distance_from_campus],
            ['commute_time_to_campus', 'like', $commute_time_to_campus],
            ['landlord_id', 'like', $landlord_id],
            //combined is a column that is the result of every other column being concated
            ['combined', 'like', '%' . $search . '%'],
        ])
            ->limit($limit)
            ->orderBy('date', $order)
            ->get();

        return $listing;

    }


}
