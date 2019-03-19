<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingsController extends Controller
{

    // TUTORIAL
    // https://laravel.com/docs/master/queries

    public function index(Request $request)
    {
        $id = $request->input('id') ?: '%';
        $type = $request->input('type') ?: '%';
        $address = $request->input('address') ?: '%';
        $bedrooms = $request->input('bedrooms') ?: '%';
        $bathrooms = $request->input('bathrooms') ?: '%';
        $rent = $request->input('rent') ?: '%';
        $description = $request->input('description') ?: '%';
        $images = $request->input('images') ?: '%';
        $date = $request->input('date') ?: '%';
        $distance_from_campus = $request->input('distance_from_campus') ?: '%';
        $commute_time_to_campus = $request->input('commute_time_to_campus') ?: '%';
        $landlord_id = $request->input('landlord_id') ?: '%';
        $order = $request->input('order') ?: 'desc';
        $limit = $request->input('limit') ?: 9999999;
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
            ['combined', 'like', '%' . $search . '%'],
        ])
            ->limit($limit)
            ->orderBy('date', $order)
            ->get();

        return $listing;

    }


}
