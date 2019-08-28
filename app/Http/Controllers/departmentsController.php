<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;

class departmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = department::all();
        return view('department.index')->with('departments',$departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required',
            'credit'=>'required',
            'year'=>'required',
            'desc'=>'required'
        ]);

        //create department
        $dep = new department;
        $dep->name = $request->input('name');
        $dep->code = $request->input('code');
        $dep->credit = $request->input('credit');
        $dep->year = $request->input('year');
        $dep->description = $request->input('desc');

        //save
        $dep->save();
        return redirect('/departments')->with('success','Saved Saccessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dep = department::find($id);
        return view('department.edit')->with('department',$dep);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'code'=>'required',
            'credit'=>'required',
            'year'=>'required',
            'desc'=>'required'
        ]);

        //create department
        $dep = department::find($id);
        $dep->name = $request->input('name');
        $dep->code = $request->input('code');
        $dep->credit = $request->input('credit');
        $dep->year = $request->input('year');
        $dep->description = $request->input('desc');

        //save
        $dep->save();
        return redirect('/departments')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep = department::find($id);
        $dep->delete();

        return redirect('/departments')->with('error','Deleted Saccessfully');
    }
}
