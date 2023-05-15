<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Guidence;
use App\Models\Hotel;
use App\Models\Hotel_amenity;
use App\Models\Hotel_review;
use App\Models\Testmonial;
use App\Models\Trip;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $company = Company::first();
        $trips = Trip::all();
        $testimonials = Testmonial::take(6)->get();
        $guidences = Guidence::take(3)->get();
        $faqs = Faq::all();
        $galleries = Gallery::all();
        $hotels = Hotel::all();
        return view("website.home", compact(['company', 'trips', 'testimonials', 'guidences'
            , 'faqs', 'galleries', 'hotels'])
        );
    }

    public function search(Request $request)
    {
        $company = Company::first();
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $hotels = Hotel::query()
            ->where('title', 'LIKE', "%{$search}%")

            ->paginate(4);

        // Return the search view with the resluts compacted
        return view('website.hotelsearch', compact('hotels', 'company'));
    }

    public function singleHotel($id)
    {
        $company = Company::first();
        $hotel = Hotel::find($id);
        $ids = Hotel_amenity::where('hotel_id', $id)->pluck('amenity_id');
        $amenities = Amenity::whereIn('id', $ids)->get();
        $reviews=Hotel_review::where('hotel_id', $id)->get();
        return view("website.singleHotel", compact('hotel', 'company', 'amenities','reviews'));

    }
}
