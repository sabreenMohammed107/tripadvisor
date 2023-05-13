<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Gallery $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.galleries.';
        $this->routeName = 'galleries.';
    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Gallery::orderBy("created_at", "Desc")->get();

        return view($this->viewName . 'index', compact(['rows']));
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
        // $input = $request->except(['_token','img']);
        // if ($request->hasFile('img')) {
        //     $attach_image = $request->file('img');

        //     $input['img'] = $this->UplaodImage($attach_image);
        // }
        // if ($request->has('active')) {

        //     $input['active'] = '1';
        // } else {
        //     $input['active'] = '0';
        // }
        // Gallery::create($input);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
              $input=[];
                $name = $file->getClientOriginalName();


                // Rename The Image ..
                $imageName = $name;
                $uploadPath = public_path('uploads/galleries');

                // Move The image..
                $file->move($uploadPath, $imageName);
                //save in DB

                $input['image'] = $imageName;
                Gallery::create($input);
            }
        }
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(REQUEST $request,  $id)
    {
        $gallery = Gallery::where('id', $id)->first();
        $input = $request->except(['_token','gallery_id','img']);
        if ($request->hasFile('img')) {
            $attach_image = $request->file('img');

            $input['img'] = $this->UplaodImage($attach_image);
        }


        // Tour::findOrFail($request->get('tour_id'))->update($input);
        $gallery->update($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::where('id', $id)->first();
         // Delete File ..
         $file = $gallery->image;
         $file_name = public_path('uploads/galleries/' . $file);
         try {
             File::delete($file_name);

            $gallery->delete();
            return redirect()->back()->with('flash_del', 'Successfully Delete!');

        } catch (QueryException $q) {
            // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
            return redirect()->back()->withInput()->with('flash_danger', 'Can’t delete This Row
            Because it related with another table');
        }
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
          $uploadPath = public_path('uploads/galleries');

          // Move The image..
          $file->move($uploadPath, $imageName);

          return $imageName;
      }
}
