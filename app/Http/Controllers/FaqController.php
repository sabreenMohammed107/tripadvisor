<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;

    /**
     * UserController Constructor.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Faq $object)
    {
        $this->middleware('auth');

        $this->object = $object;
        $this->viewName = 'admin.faq.';
        $this->routeName = 'faq.';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Faq::all();
        return view($this->viewName . 'index', compact(['rows']));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view($this->viewName . 'add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token']);

        Faq::create($input);
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
        $row=Faq::where('id',$id)->first();
        return view($this->viewName . 'edit', compact(['row']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->except(['_token']);

        Faq::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'Successfully Saved!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row=Faq::where('id',$id)->first();
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
