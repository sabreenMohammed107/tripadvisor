<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Company $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.company.';
        $this->routeName = 'company.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view($this->viewName . 'show', compact(['company']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $company=Company::where('id',$id)->first();
        return view($this->viewName . 'edit', compact(['company']));
    }

    /**
     * Update the specified resource in storage.
     *

     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $company=Company::where('id',$id)->first();
        $input = $request->except(['_token']);

        $company->update($input);

        return redirect()->route($this->routeName. 'edit',$id)->with('flash_success', 'Successfully Saved!');    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }


     /* uplaud image
       */
      public function UplaodImage($file_request)
      {
          //  This is Image Info..
          $file = $file_request;
          $name = $file->getClientOriginalName();
          $ext = $file->getClientOriginalExtension();
          $size = $file->getSize();
          $path = $file->getRealPath();
          $mime = $file->getMimeType();

          // Rename The Image ..
          $imageName = $name;
          $uploadPath = public_path('uploads/company');

          // Move The image..
          $file->move($uploadPath, $imageName);

          return $imageName;
      }


    //   public function contact()
    //   {
    //     $contacts = Contact::orderBy("created_at", "Desc")->get();


    //     return view($this->viewName . 'contact', compact(['contacts']));
    //   }
}
