<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class TestimonialContoller extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Testmonial $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.testmonial.';
        $this->routeName = 'testimonial.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Testmonial::all();
        return view($this->viewName . 'index', compact(['rows']));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::where('type',0)->get();
        return view($this->viewName . 'add', compact(['users']));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token']);

        Testmonial::create($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row=Testmonial::where('id',$id)->first();
        $users=User::where('type',0)->get();
        return view($this->viewName . 'edit', compact(['users','row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except(['_token']);

        Testmonial::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Testmonial::where('id',$id)->first();
        // Delete File ..

        try {


           $row->delete();
           return redirect()->back()->with('flash_del', 'Successfully Delete!');

       } catch (QueryException $q) {
           // return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());
           return redirect()->back()->withInput()->with('flash_danger', 'Can’t delete This Row
           Because it related with another table');
       }
    }
}
