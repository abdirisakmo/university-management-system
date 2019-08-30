<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leave;

class leavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $leaves = leave::all();
        return view('leaves.index')->with('leaves',$leaves);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaves.create');
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
            'id'=>'required',
            'name'=>'required',
            'shift'=>'required',
            'days'=>'required',
            'status'=>'required',
        ]);

        //create department
        $leaves = new leave;
        $leaves->id = $request->input('id');
        $leaves->name = $request->input('name');
        $leaves->shift = $request->input('shift');
        $leaves->leavehours = $request->input('days');
        $leaves->status = $request->input('status');

        //save
        $leaves->save();
        return redirect('/leave')->with('success','Saved Saccessfully');
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
        $leaves = leave::find($id);
        return view('leaves.edit')->with('leaves',$leaves);
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
            'id'=>'required',
            'name'=>'required',
            'shift'=>'required',
            'days'=>'required',
            'status'=>'required',
        ]);

        //create department
        $leaves = leave::find($id);
        $leaves->id = $request->input('id');
        $leaves->name = $request->input('name');
        $leaves->shift = $request->input('shift');
        $leaves->leavehours = $request->input('days');
        $leaves->status = $request->input('status');

        //save
        $leaves->save();
        return redirect('/leave')->with('success','Updated Saccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leaves = leave::find($id);
        $leaves->delete();

        return redirect('/leave')->with('error','Deleted Saccessfully');
    }
}
