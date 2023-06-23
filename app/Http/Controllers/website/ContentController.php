<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Hotel_review;
use App\Models\Newsletter;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class ContentController extends Controller
{
    //
     // Store Contact Form data
     public function ContactUsForm(Request $request)
     {
         // Form validation

         $validator = Validator::make($request->all(), [
             'name' => 'required',
             'email' => 'required',
             'phone' => 'required',
             'message' => 'required',

         ]);
         if ($validator->fails()) {

            return redirect()->route('/');

         }
         //  Store data in database
           Contact::create($request->all());
         //
         return Redirect::to('/')->with('flash_success','thanks for your Contact');
     }

     public function sendNewsLetter(Request $request){
        try{

            $letter= Newsletter::create($request->all());
            // $emails = ['senior.steps.info@gmail.com','info@btsconsultant.com','nasser@btsconsultant.com'];
            // \Mail::to($emails)->send(new NewsLetterNotification($letter));


            //  return redirect()->back()->with('message','thanks for your subscription');
             return redirect()->back();

         }
            catch(QueryException $q){

             return redirect()->back()->with('message','empLetter');

         }
    }

    public function Addreview(Request $request){
$validator = Validator::make($request->all(), [

            'review_text' => 'required',


        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $Rev = new Hotel_review();
        $Rev->review_text = $request->review_text;
        $Rev->review_stars = $request->rate_val;
        $Rev->hotel_id = $request->hotel_id;
        $Rev->review_date = now();
        // $Rev->user_id =Auth::user()->id;
        // if(session()->get("SiteUser")){
        //     $Rev->user_id = session()->get("SiteUser")["ID"];
        // }
        // $Rev->tour_id = 1; //temp

        $Rev->save();

        return redirect()->back();
        // return response()->json(['success'=>Lang::get('links.contactMsg')]);

    }

}
