<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Guidence;
use App\Models\Hotel;
use App\Models\Testmonial;
use App\Models\Trip;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
$company=Company::first();
$trips=Trip::all();
$testimonials=Testmonial::take(6)->get();
$guidences=Guidence::take(3)->get();
$faqs=Faq::all();
$galleries=Gallery::all();
$hotels=Hotel::all();
        return view("website.home",compact(['company','trips','testimonials','guidences'
        ,'faqs','galleries','hotels'])
       );
    }
}
